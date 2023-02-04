function spawnEnemies(current_lap) {
    switch(current_lap) {
      case 1:
        for (let i = 1; i < 2 + 1; i++) {
          const xOffset = i * 150
          enemies.push(
            new Enemy({
              position: { x: waypoints[0].x - xOffset, y: waypoints[0].y },
              imageSrc: "/img/Enemys"+ORC1[0],
              health: ORC1[1],
              speed: ORC1[2],
              payment: ORC1[3],
              decrease_hearts: ORC1[4],
              waypoints_alt: waypoints
            })
          )
        }
        // current_lap -=1
        // spawnEnemies(current_lap)
        break;
      case 2:
        for (let i = 1; i < 4 + 1; i++) {
            const xOffset = i * 150
            enemies.push(
              new Enemy({
                position: { x: waypoints[0].x - xOffset, y: waypoints[0].y },
                imageSrc: "/img/Enemys"+ORC1[0],
                health: ORC1[1],
                speed: ORC1[2],
                payment: ORC1[3],
                decrease_hearts: ORC1[4],
                waypoints_alt: waypoints
              })
            )
          }
        // current_lap -=1
        // spawnEnemies(current_lap)
        break;
      case 3:
        for (let i = 1; i < 7 + 1; i++) {
          const xOffset = i * 150
          enemies.push(
            new Enemy({
              position: { x: waypoints[0].x - xOffset, y: waypoints[0].y },
              imageSrc: "/img/Enemys"+ORC1[0],
              health: ORC1[1],
              speed: ORC1[2],
              payment: ORC1[3],
              decrease_hearts: ORC1[4],
              waypoints_alt: waypoints
            })
          )
        }
        break;
      case 4:
        for (let i = 1; i < 4 + 1; i++) {
          const xOffset = i * 150
          enemies.push(
            new Enemy({
              position: { x: waypoints[0].x - xOffset, y: waypoints[0].y },
              imageSrc: "/img/Enemys"+ORC1[0],
              health: ORC1[1],
              speed: ORC1[2],
              payment: ORC1[3],
              decrease_hearts: ORC1[4],
              waypoints_alt: waypoints
            })
          )
        }
        for (let i = 1; i < 2 + 1; i++) {
          const xOffset = i * 230
          enemies.push(
            new Enemy({
              position: { x: waypoints2[0].x - xOffset, y: waypoints2[0].y },
              imageSrc: "/img/Enemys"+TROLL1[0],
              health: TROLL1[1],
              speed: TROLL1[2],
              payment: TROLL1[3],
              decrease_hearts: TROLL1[4],
              waypoints_alt: waypoints2
            })
          )
        }
        break;
      case 5:
        for (let i = 1; i < 4 + 1; i++) {
          const xOffset = i * 150
          enemies.push(
            new Enemy({
              position: { x: waypoints2[0].x - xOffset, y: waypoints2[0].y },
              imageSrc: "/img/Enemys"+ORC1[0],
              health: ORC1[1],
              speed: ORC1[2],
              payment: ORC1[3],
              decrease_hearts: ORC1[4],
              waypoints_alt: waypoints
            })
          )
        }
        for (let i = 1; i < 5 + 1; i++) {
          const xOffset = i * 230
          enemies.push(
            new Enemy({
              position: { x: waypoints[0].x - xOffset, y: waypoints[0].y },
              imageSrc: "/img/Enemys"+TROLL1[0],
              health: TROLL1[1],
              speed: TROLL1[2],
              payment: TROLL1[3],
              decrease_hearts: TROLL1[4],
              waypoints_alt: waypoints2
            })
          )
        }
        break;
      case 6:
        for (let i = 1; i < 10 + 1; i++) {
          const xOffset = i * 100
          enemies.push(
            new Enemy({
              position: { x: waypoints[0].x - xOffset, y: waypoints[0].y },
              imageSrc: "/img/Enemys"+ORC1[0],
              health: ORC1[1],
              speed: ORC1[2],
              payment: ORC1[3],
              decrease_hearts: ORC1[4],
              waypoints_alt: waypoints
            })
          )
        }
        break;
      case 7:
        for (let i = 1; i < 6 + 1; i++) {
          const xOffset = i * 100
          enemies.push(
            new Enemy({
              position: { x: waypoints[0].x - xOffset, y: waypoints[0].y },
              imageSrc: "/img/Enemys"+ORC1[0],
              health: ORC1[1],
              speed: ORC1[2],
              payment: ORC1[3],
              decrease_hearts: ORC1[4],
              waypoints_alt: waypoints
            })
          )
        }
        for (let i = 1; i < 6 + 1; i++) {
          const xOffset = i * 230
          enemies.push(
            new Enemy({
              position: { x: waypoints[0].x - xOffset, y: waypoints[0].y },
              imageSrc: "/img/Enemys"+TROLL1[0],
              health: TROLL1[1],
              speed: TROLL1[2],
              payment: TROLL1[3],
              decrease_hearts: TROLL1[4],
              waypoints_alt: waypoints2
            })
          )
        }
        break;
      case 8:
        for (let i = 1; i < 10 + 1; i++) {
          const xOffset = i * 140
          enemies.push(
            new Enemy({
              position: { x: waypoints[0].x - xOffset, y: waypoints[0].y },
              imageSrc: "/img/Enemys"+TROLL1[0],
              health: TROLL1[1],
              speed: TROLL1[2],
              payment: TROLL1[3],
              decrease_hearts: TROLL1[4],
              waypoints_alt: waypoints2
            })
          )
        }
        break;
      case 9:
        const xOffset = 100
        enemies.push(
          new Enemy({
            position: { x: waypoints[0].x - xOffset, y: waypoints[0].y },
            imageSrc: "/img/Enemys"+ORC2[0],
            health: ORC2[1],
            speed: ORC2[2],
            payment: ORC2[3],
            decrease_hearts: ORC2[4],
            waypoints_alt: waypoints
          })
        )
        break;
      case 10:
        for (let i = 1; i < 10 + 1; i++) {
          const xOffset = i * 150
          enemies.push(
            new Enemy({
              position: { x: waypoints[0].x - xOffset, y: waypoints[0].y },
              imageSrc: "/img/Enemys"+ORC1[0],
              health: ORC1[1],
              speed: ORC1[2],
              payment: ORC1[3],
              decrease_hearts: ORC1[4],
              waypoints_alt: waypoints
            })
          )
        }
        for (let i = 1; i < 2 + 1; i++) {
          const xOffset = i * 230
          enemies.push(
            new Enemy({
              position: { x: waypoints[0].x - xOffset, y: waypoints[0].y },
              imageSrc: "/img/Enemys"+ORC2[0],
              health: ORC2[1],
              speed: ORC2[2],
              payment: ORC2[3],
              decrease_hearts: ORC2[4],
              waypoints_alt: waypoints
            })
          )
        }
        for (let i = 1; i < 1 + 1; i++) {
          const xOffset = 1000
          const ENEMY = KNIGHT1
          enemies.push(
            new Enemy({
              position: { x: waypoints[0].x - xOffset, y: waypoints[0].y },
              imageSrc: "/img/Enemys"+ENEMY[0],
              health: ENEMY[1],
              speed: ENEMY[2],
              payment: ENEMY[3],
              decrease_hearts: ENEMY[4],
              waypoints_alt: waypoints2
            })
          )
        }
        break;
  }
  //enemies = enemies.reverse()
}