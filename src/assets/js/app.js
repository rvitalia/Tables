 // JavaScript для показа/скрытия опций при изменении состояния чекбокса
 const selectContainer = document.querySelector('.select-container');
 const checkboxes = document.querySelectorAll('.checkbox');
 const selectedCount = document.querySelector('.selected-count');
 const optionsList = document.querySelector('.options-list');

 selectContainer.addEventListener('click', function(event) {
  //  if (!event.target.classList.contains('checkbox')) {
     optionsList.style.display = (optionsList.style.display === 'block') ? 'none' : 'block';
  //  }
 });

 checkboxes.forEach(function(checkbox) {
   checkbox.addEventListener('change', function() {
     let selectedItems = document.querySelectorAll('.checkbox:checked');
     selectedCount.textContent = selectedItems.length + " items selected";
   });
 });


// Получаем все элементы с классом "price__inner"
const priceInners = document.querySelectorAll('.price__inner');

// Проходимся по каждому элементу
priceInners.forEach(priceInner => {
    // Получаем дочерние элементы
    const children = Array.from(priceInner.children);
    const childCount = children.length;

    // Проверяем количество дочерних элементов
    if (childCount >= 3 && childCount < 6) {
        // Рассчитываем ширину для элементов
        const minWidth = 1 / 3; // Минимальная ширина для первых двух элементов
        const maxWidth = 2 / 3; // Максимальная ширина для последних двух элементов

        // Применяем стили к первым двум элементам
        children.slice(0, 2).forEach(child => {
            child.style.flex = minWidth;
            child.style.flexGrow = minWidth;
        });

        // Применяем стили к последним двум элементам
        children.slice(-2).forEach(child => {
            child.style.flex = maxWidth;
            child.style.flexGrow = maxWidth;
        });
    } else if (childCount === 2) {
        // Применяем стили ко второму элементу с увеличенным пространством
        children[0].style.flex = '1';
        children[0].style.flexGrow = '1';
        children[1].style.flex = '2';
        children[1].style.flexGrow = '2';
    } 
    else if (childCount > 5) {
        // Рассчитываем ширину для каждого элемента, если дочерних элементов больше 5
        const width = 1 / childCount;

        // Применяем одинаковые стили ко всем дочерним элементам
        children.forEach(child => {
            child.style.flex = 1;
            child.style.flexGrow = 1;
            child.style.flexShrink = 0;
        });
    }
});

let buttonHidden = document.querySelector('[data-hidden]');
if(buttonHidden){
    document.querySelector('[data-hidden]').addEventListener('click', function() {
          const block = document.querySelector('[data-block]');
          block.classList.toggle('hidden');    
          buttonHidden.classList.toggle('active'); // Поворачиваем элемент на 180 градусов
        });
}