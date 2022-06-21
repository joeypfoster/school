// variable of html file
var snakeTable = document.querySelector(".snakeTable");
var boxes = document.getElementsByClassName("box");
var start = document.querySelector(".start");
var modul = document.querySelector(".modul");

// variable of playing grid
var table = {
    rowsCols: 21,
    boxes: 21*21
};

// creates playing field
tableCreation()

// listens in for button click to start game
start.addEventListener("click", startSnake);

// start game
function startSnake() {
    // hides button
    modul.classList.add("hidden");
}

// move the snake function
function move() {
    // calls updatespositions function and rendersnake function
    updatePositions();
    renderSnake();
    // listens in for keypresses if so calls turn fuction
    document.addEventListener("keydown", turn);
    // sets snake canTurn true
    snake.canTurn = 1;
}

// creates playing field
function tableCreation() {
    // checks if playing field !already exist
    if (snakeTable.innerHTML === "") {
      // loops to load the playing field by using divs as boxes
      for (var i = 0; i<table.boxes; i++) {
        var divElt = document.createElement("div");
        divElt.classList.add("box");
        snakeTable.appendChild(divElt);
      }
      // creates status bar here you can see the score you have
      var statusElt = document.createElement("div");
      statusElt.classList.add("status");
      snakeTable.appendChild(statusElt);
      scoreElt = document.createElement("span");
      scoreElt.classList.add("score");
      // load score in
      // scoreElt.innerHTML = snake.score + " pts";
      statusElt.appendChild(scoreElt);
    }
}

// updates position of snakes body
function updatePositions() {
    // remove last snake part (first snake pos)
    boxes[snake.position[0][0] + snake.position[0][1] * table.rowsCols].classList.remove("snake");
    snake.position.shift();
    // add new snake part
    var head = snake.position[snake.position.length - 1];
    // checks whitch direction the snake is looking depending on that calculates how de body needs to move
    switch (snake.direction) {
      case "left":
        snake.position.push([head[0] - 1, head[1]]);
        break;
      case "up":
        snake.position.push([head[0], head[1] - 1]);
        break;
      case "right":
        snake.position.push([head[0] + 1, head[1]]);
        break;
      case "down":
        snake.position.push([head[0], head[1] + 1]);
        break;
      default:
        console.log("no direction !");
    }
  }


// changes the direction the snake looks
function turn(e) {
    // e stands for the document.addeventlister("keydown") so e == the key thats being pressed
    // checks if snake.canturn == true if so it will look for what key is being pressed and
    // change the look of the snake depending on the key
    if (snake.canTurn) {
      switch (e.keyCode) {
        case 37:// left-arrow
        // if left-arrow is pressed check if the snake is looking right if so then return due to the snake cant go tru his body
        // if snakes direction isn't right then update the snakes direction to left this will update the look of the snake then break
          if (snake.direction === "right") return;
          snake.direction = "left";
          break;
        case 38:// up-arrow
          if (snake.direction === "down") return;
          snake.direction = "up";
          break;
        case 39:// right-arrow
          if (snake.direction === "left") return;
          snake.direction = "right";
          break;
        case 40:// down-arrow
          if (snake.direction === "up") return;
          snake.direction = "down";
          break;
        case 65:// a
          if (snake.direction === "right") return;
          snake.direction = "left";
          break;
        case 87:// w
          if (snake.direction === "down") return;
          snake.direction = "up";
          break;
        case 68:// d
          if (snake.direction === "left") return;
          snake.direction = "right";
          break;
        case 83:// s
          if (snake.direction === "up") return;
          snake.direction = "down";
          break;
        default:
          console.log("wrong key");
      }
      // sets snake.canturn to false  
      snake.canTurn = 0;
    }
}