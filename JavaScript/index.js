const canvas = document.querySelector('canvas')
const c = canvas.getContext('2d')

canvas.width = 1280
canvas.height = 768

c.fillStyle = 'white'
c.fillRect(0, 0, canvas.width, canvas.height)

const placementTilesData2D = []

for (let i = 0; i < placementTilesData.length; i += 20) {
  placementTilesData2D.push(placementTilesData.slice(i, i + 20))
}

const placementTiles = []

placementTilesData2D.forEach((row, y) => {
  row.forEach((symbol, x) => {
    if (symbol === 14) {
      // add building placement tile here
      placementTiles.push(
        new PlacementTile({
          position: {
            x: x * 64,
            y: y * 64
          }
        })
      )
    }
  })
})

const image = new Image()

image.onload = () => {
  animate()
}
image.src = "/img/Maps"+IMAGE_MAP



var enemies = []

const buildings = []
let activeTile = undefined
let enemyCount = 3
let hearts = 10
let coins = 100
let current_lap = 1
const explosions = []

spawnEnemies(current_lap)

function animate() {
  const animationId = requestAnimationFrame(animate)

  c.drawImage(image, 0, 0)

  // stop aniumation on button click
  var stop_animation = document.getElementById(0).slot
  if (stop_animation == 1){
    cancelAnimationFrame(animationId)
    document.querySelector('#gameOver').innerHTML = "pause"
    document.querySelector('#gameOver').style.display = 'flex'
  } else {
    document.querySelector('#gameOver').style.display = 'none'

  }

  for (let i = enemies.length - 1; i >= 0; i--) {
    const enemy = enemies[i]
    enemy.update()

    if (enemy.position.x > canvas.width || (enemy.position.y < -70 && enemy.position.x > 200)) {
      hearts -= enemy.decrease_hearts
      enemies.splice(i, 1)
      document.querySelector('#hearts').innerHTML = hearts

      if (hearts === 0) {
        console.log('game over')
        cancelAnimationFrame(animationId)
        document.querySelector('#gameOver').innerHTML = "GAME OVER"
        document.querySelector('#gameOver').style.display = 'flex'
        document.getElementById(0).slot = 3
      }
    }
  }

  for (let i = explosions.length - 1; i >= 0; i--) {
    const explosion = explosions[i]
    explosion.draw()
    explosion.update()

    if (explosion.frames.current >= explosion.frames.max - 1) {
      explosions.splice(i, 1)
    }
  }

  // tracking total amount of enemies
  if (enemies.length === 0) {
    // enemyCount += 2
    coins += 10 * current_lap
    document.querySelector('#coins').innerHTML = coins
    current_lap ++
    document.getElementById("round").innerHTML = "Lap "+ current_lap
    spawnEnemies(current_lap)
  }

  if (current_lap === NUMBER_ROUNDS +1){
    document.querySelector('#gameOver').innerHTML = "VICTORY"
    document.querySelector('#gameOver').style.display = 'flex'
    cancelAnimationFrame(animationId)

  }
 
  placementTiles.forEach((tile) => {
    tile.update(mouse)
  })

  buildings.forEach((building) => {
    building.update()
    building.target = null
    const validEnemies = enemies.filter((enemy) => {
      const xDifference = enemy.center.x - building.center.x
      const yDifference = enemy.center.y - building.center.y
      const distance = Math.hypot(xDifference, yDifference)
      return distance < enemy.radius + building.radius
    })
    building.target = validEnemies[0]

    for (let i = building.projectiles.length - 1; i >= 0; i--) {
      const projectile = building.projectiles[i]

      projectile.update()

      const xDifference = projectile.enemy.center.x - projectile.position.x
      const yDifference = projectile.enemy.center.y - projectile.position.y
      const distance = Math.hypot(xDifference, yDifference)

      // this is when a projectile hits an enemy
      if (distance < projectile.enemy.radius + projectile.radius) {
        // enemy health and enemy removal
        projectile.enemy.health -= TOWER_DAMAGE
        if (projectile.enemy.health <= 0) {
          const enemyIndex = enemies.findIndex((enemy) => {
            return projectile.enemy === enemy
          })

          if (enemyIndex > -1) {
            enemies.splice(enemyIndex, 1)
            coins += projectile.enemy.payment
            document.querySelector('#coins').innerHTML = coins
          }
        }

        console.log(projectile.enemy.health)
        explosions.push(
          new Sprite({
            position: { x: projectile.position.x, y: projectile.position.y },
            imageSrc: '/img/explosion.png',
            frames: { max: 4 },
            offset: { x: 0, y: 0 }
          })
        )
        building.projectiles.splice(i, 1)
      }
    }
  })
}
const mouse = {
  x: undefined,
  y: undefined
}

canvas.addEventListener('click', (event) => {
  if (activeTile && !activeTile.isOccupied && coins - 50 >= 0) {
    coins -= TOWER_COST
    document.querySelector('#coins').innerHTML = coins
    buildings.push(
      new Building({
        position: {
          x: activeTile.position.x,
          y: activeTile.position.y
        },
        radius: TOWER_RADIUS,
        imageSrc: IMAGE_TOWER

      })
    )
    activeTile.isOccupied = true
    buildings.sort((a, b) => {
      return a.position.y - b.position.y
    })
  }
})

window.addEventListener('mousemove', (event) => {
  mouse.x = event.clientX
  mouse.y = event.clientY

  activeTile = null
  for (let i = 0; i < placementTiles.length; i++) {
    const tile = placementTiles[i]
    if (
      mouse.x > tile.position.x &&
      mouse.x < tile.position.x + tile.size &&
      mouse.y > tile.position.y &&
      mouse.y < tile.position.y + tile.size
    ) {
      activeTile = tile
      break
    }
  }
})