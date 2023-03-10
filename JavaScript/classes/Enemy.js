class Enemy extends Sprite {
  constructor({ position = { x: 0, y: 0 }, imageSrc, health, speed, payment, decrease_hearts, waypoints_alt }) {
    super({
      position,
      imageSrc,
      frames: {
        max: 7
      }
    })
    this.position = position
    this.width = 100
    this.height = 100
    this.waypointIndex = 0
    this.center = {
      x: this.position.x + this.width / 2,
      y: this.position.y + this.height / 2
    }
    this.radius = 50
    this.health = health
    this.speed = speed
    this.payment = payment
    this.base_health = health
    this.decrease_hearts = decrease_hearts
    this.velocity = {
      x: 0,
      y: 0
    }
    this.waypoints = waypoints_alt
  }

  draw() {
    super.draw()

    // health bar
    c.fillStyle = 'red'
    c.fillRect(this.position.x, this.position.y - 15, this.width, 10)

    c.fillStyle = 'green'
    c.fillRect(
      this.position.x,
      this.position.y - 15,
      (this.width * this.health) / this.base_health,
      10
    )
  }

  update() {
    this.draw()
    super.update()

    const waypoint = this.waypoints[this.waypointIndex]
    const yDistance = waypoint.y - this.center.y
    const xDistance = waypoint.x - this.center.x
    const angle = Math.atan2(yDistance, xDistance)

    const speed = this.speed

    this.velocity.x = Math.cos(angle) * speed
    this.velocity.y = Math.sin(angle) * speed

    this.position.x += this.velocity.x
    this.position.y += this.velocity.y

    this.center = {
      x: this.position.x + this.width / 2,
      y: this.position.y + this.height / 2
    }

    if (
      Math.abs(Math.round(this.center.x) - Math.round(waypoint.x)) <
        Math.abs(this.velocity.x) &&
      Math.abs(Math.round(this.center.y) - Math.round(waypoint.y)) <
        Math.abs(this.velocity.y) &&
      this.waypointIndex < this.waypoints.length - 1
    ) {
      this.waypointIndex++
    }
  }
}
