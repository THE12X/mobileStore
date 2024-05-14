<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TIC TAC TOE</title>
    <style>
        body {
            background: #e0e0e0;
            font-family: comfortaa;

        }

        main {
            background: #e0e0e0;
            box-shadow: 15px 15px 30px #bebebe, -15px -15px 30px #ffffff;
            border-radius: 30px;
            height: 96vh;
            width: 96vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }


        h1 {
            color: rgb(56, 56, 56);
            text-align: center;
            font-size: 50px;
        }

        .display {
            color: rgb(58, 58, 58);
            font-size: 25px;
            text-align: center;

        }

        .hide {
            display: none;
        }

        .container {
            display: grid;
            grid-template-columns: 33% 33% 33%;
            grid-template-rows: 33% 33% 33%;
            max-width: 300px;

        }

        .tile {
            border: 2px solid rgb(255, 174, 0);
            min-width: 100px;
            border-radius: 10px;
            min-height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
            cursor: pointer;
        }

        .playerX {
            color: #03ff6c;
        }

        .playerO {
            color: #ffc400;
        }

        #reset {

            width: 130px;
            height: 40px;
            font-size: 20px;
            font-family: comfortaa;
            border: 0;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.329) 1px 4px 8px;
            background: linear-gradient(to right,
                    hsl(118, 100%, 50%),
                    hsl(180, 100%, 50%));
            color: white;
            transition: filter .8s;

        }

        #reset:hover {
            filter: hue-rotate(-40deg);
        }
        a{
            text-decoration: none;
            color: #ffc400;
            font-weight: bolder;
            transition: 0.4s ease-in-out;

        }
        a:hover{
            color: #03ff6c;
            transition: 0.4s ease-in-out;
        }
    </style>

</head>

<body>
    <main>

        <a href="/Games">GO BACK</a>
        <h1>Tic Tac Toe</h1>
        <section class="display">Player <span class="display-player playerX">X</span>'s turn</section><br>
        <section class="container">
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
            <div class="tile"></div>
        </section>
        <br>
        <button id="reset">Reset</button>
        <br>
        <section class="display announcer hide"></section>
    </main>

    <script>
        window.addEventListener("DOMContentLoaded", () => {
            const tiles = Array.from(document.querySelectorAll(".tile"));
            const playerDisplay = document.querySelector(".display-player");
            const resetButton = document.querySelector("#reset");
            const announcer = document.querySelector(".announcer");

            let board = ["", "", "", "", "", "", "", "", ""];
            let currentPlayer = "X";
            let isGameActive = true;

            const PLAYERX_WON = "PLAYERX_WON";
            const PLAYERO_WON = "PLAYERO_WON";
            const TIE = "TIE";

            const winningConditions = [
                [0, 1, 2],
                [3, 4, 5],
                [6, 7, 8],
                [0, 3, 6],
                [1, 4, 7],
                [2, 5, 8],
                [0, 4, 8],
                [2, 4, 6]
            ];

            function handleResultValidation() {
                let roundWon = false;
                for (let i = 0; i <= 7; i++) {
                    const winCondition = winningConditions[i];
                    const a = board[winCondition[0]];
                    const b = board[winCondition[1]];
                    const c = board[winCondition[2]];
                    if (a === "" || b === "" || c === "") {
                        continue;
                    }
                    if (a === b && b === c) {
                        roundWon = true;
                        break;
                    }
                }

                if (roundWon) {
                    announce(currentPlayer === "X" ? PLAYERX_WON : PLAYERO_WON);
                    isGameActive = false;
                    return;
                }

                if (!board.includes("")) announce(TIE);
            }

            const announce = (type) => {
                switch (type) {
                    case PLAYERO_WON:
                        announcer.innerHTML = 'Player <span class="playerO">O</span> Won';
                        break;
                    case PLAYERX_WON:
                        announcer.innerHTML = 'Player <span class="playerX">X</span> Won';
                        break;
                    case TIE:
                        announcer.innerText = "Tie";
                }
                announcer.classList.remove("hide");
            };

            const isValidAction = (tile) => {
                return tile.innerText !== "X" && tile.innerText !== "O";
            };

            const updateBoard = (index) => {
                board[index] = currentPlayer;
            };

            const changePlayer = () => {
                playerDisplay.classList.remove(`player${currentPlayer}`);
                currentPlayer = currentPlayer === "X" ? "O" : "X";
                playerDisplay.innerText = currentPlayer;
                playerDisplay.classList.add(`player${currentPlayer}`);
            };

            const userAction = (tile, index) => {
                if (isValidAction(tile) && isGameActive) {
                    tile.innerText = currentPlayer;
                    tile.classList.add(`player${currentPlayer}`);
                    updateBoard(index);
                    handleResultValidation();
                    changePlayer();
                }
            };

            const resetBoard = () => {
                board = ["", "", "", "", "", "", "", "", ""];
                isGameActive = true;
                announcer.classList.add("hide");

                if (currentPlayer === "O") {
                    changePlayer();
                }

                tiles.forEach((tile) => {
                    tile.innerText = "";
                    tile.classList.remove("playerX");
                    tile.classList.remove("playerO");
                });
            };

            tiles.forEach((tile, index) => {
                tile.addEventListener("click", () => userAction(tile, index));
            });

            resetButton.addEventListener("click", resetBoard);
        });
    </script>
</body>

</html>
<?php /**PATH C:\Users\THE X\Desktop\PFE\resources\views/tictactoe.blade.php ENDPATH**/ ?>