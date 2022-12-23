import { startGame } from "./startGame.js";

export const createGameMenu = () => {
    const title = document.createElement('h2');
    const gameSection = document.querySelector('.game-section__container');

    gameSection.innerHTML = '';

    title.classList.add('game-menu__title');
    document.querySelector('.confetti').innerHTML = '';

    const createDifficultButton = (difficult) => {
        const button = document.createElement('button');

        button.classList.add('game-menu__difficult-btn');
        button.textContent = `${difficult} `;

        button.addEventListener('click', () => startGame(difficult))

        return button;
    }

    gameSection.append(
        title,
        createDifficultButton("играть"),

    )
}