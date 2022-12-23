
export const shuffle = (array) => {
    let currentIndex = array.length, randomIndex;
  
    while (currentIndex != 0) {
  
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex--;
  
      [array[currentIndex], array[randomIndex]] = [
        array[randomIndex], array[currentIndex]];
    }
  
    return array;
  }

export const duplicateArray = (array) => array.reduce((res, current) => res.concat([current, current]), []);

export const createIconsArray = (initialCount) => {
    const cardsIcons = [
        'compass',
        'cloud',
        'play',
        'bolt',
        'stop',
        'cogs',
        'atom',
        'basketball-ball'
    ];

    switch (initialCount) {
        case "играть":
            return cardsIcons.slice(0, 2);

        default:
            break;
    }
}