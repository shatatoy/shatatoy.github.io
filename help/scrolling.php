<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>

<body>

<script>
                    // Описание https://learn.javascript.ru/onscroll
                    // Например, если высота всего HTML-документа 2000px, тогда:
                    // когда мы находимся вверху страницы координата top относительно окна равна 0
                    document.documentElement.getBoundingClientRect().top == 0;

                    // Если прокрутить 500px вниз, тогда:
                    // координата bottom относительно окна равна 2000
                    // документ длинный, вероятно, далеко за пределами нижней части окна
                    document.documentElement.getBoundingClientRect().bottom == 2000;

                    // Когда мы прокручиваем до конца вниз, предполагая, что высота окна 600px:
                    // верх документа находится выше окна на 1400px
                    document.documentElement.getBoundingClientRect().top == -1400;
                    // низ документа находится ниже окна на 600px
                    document.documentElement.getBoundingClientRect().bottom == 600;

                    // Получить высоту окна можно как: 
                    var vysota = document.documentElement.clientHeight;

// Для нашей задачи мы хотим знать, когда нижняя граница документа находится не более чем в 100px от неё (т.е. 600-700px, если высота 600).
function populate() {
while(true) {
  let windowRelativeBottom = document.documentElement.getBoundingClientRect().bottom;
  if (windowRelativeBottom > document.documentElement.clientHeight + 100) break;
  document.body.insertAdjacentHTML("beforeend", `<p>Date: ${new Date()}</p>`);
}
}

  window.addEventListener('scroll', populate);

  populate(); // инициализация документа
</script>

</body>
</html>