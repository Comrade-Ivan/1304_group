<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Таблицы и формы</title>
</head>
<body>
  <table border="1">
    <thead> <!--Шапка-->
      <tr> <!--Table row - Строка таблицы-->
        <th>№ п\п</th> <!--Table header - ячейка заголовков-->
        <th>Тип проекта</th>
        <th>Количество</th>
      </tr>
    </thead>
    <tbody> <!--Тело таблицы-->
      <tr>
        <td width="75" height="75" valign="top">1</td> <!--Table data - Ячейка таблицы-->
        <td>Сайт (статичный)</td>
        <td>10</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Сайт (адаптивный)</td>
        <td>15</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Веб-приложение</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
  <p></p>
  <!--Таблица без thead и tbody-->
  <table border="1"> 
    <tr>
      <th>Заголовок 1</th>
      <th>Заголовок 2</th>
      <th>Заголовок 3</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Значение 1.1</td>
      <td>Значение 1.2</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Значение 2.1</td>
      <td>Значение 2.2</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Значение 3.1</td>
      <td>Значение 3.2</td>
    </tr>
  </table>
  <table border="1">
    <tr>
      <th colspan="3">Название таблицы</th>
    </tr>
    <tr>
      <th>Заголовок 1</th>
      <th>Заголовок 2</th>
      <th>Заголовок 3</th>
    </tr>
    <tr>
      <td>1</td>
      <td colspan="2">Значение 1.1</td>
    </tr>
    <tr>
      <td>2</td>
      <td colspan="2">Значение 2.2</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Значение 3.1</td>
      <td rowspan="2">Значение 3.2</td>
    </tr>    
    <tr>
      <td>4</td>
      <td>Значение 4.1</td>
    </tr>
    <tr>
      <td colspan="2">Итого:</td>
      <td>Итоговое значение</td>
    </tr>
  </table>
  <!--Формы-->
  <p></p>
  <form action="#" method=""> 
    <h3>Регистрация</h3>
    <!--action - файл-обработчик, куда будет отправлена форма-->
    <!--method - Метод отправки формы по протоколу http (GET, POST)-->
    <div>
      <p>Введите логин</p>
      <span>Логин:</span>
      <input type="text" placeholder="Введите логин" name="login" value="xxxNeoAnonyMxxx">
    </div>
    <div>
      <input type="password" name="password" placeholder="Введите пароль">
    </div>    
    <div>
      <input type="passcheck" name="password" placeholder="Повторите пароль">
    </div>
    <div>
      <p>Выберите языки, которые знаете</p>
      <input type="checkbox" name="html" id="html-input" checked>
      <label for="html-input">HTML</label>
      <label>
        <input type="checkbox" name="css">
        <span>CSS</span>
      </label>
      <label>
        <input type="checkbox" name="js">
        <span>JavaScript</span>
      </label>
      <label>
        <input type="checkbox" name="php">
        <span>PHP</span>
      </label>
    </div>
    <div>
      <p>Выберите фреймворк\библиотеку</p>
      <label>
        <input type="radio" name="framework" value="vue" checked>
        <span>Vue</span>
      </label> <!--?login=anonym&password=12345&html=on&css=on&js=on&php=on&framework=vue-->
      <label>
        <input type="radio" name="framework" value="react">
        <span>React</span>
      </label>
      <label>
        <input type="radio" name="framework" value="angular">
        <span>Angular</span>
      </label>
    </div>
    <div>
      <textarea name="about" cols="30" rows="10" placeholder="Напишите немного о себе"></textarea>
      <!--value у textarea содержится в теле тэга-->
    </div>
    <div>
      <input type="file" name="poject">
    </div>
    <div>
      <p>Выберите способ оплаты</p>
      <select name="payment">
        <option value="cash">Наличными</option>
        <option value="card">Банковской картой</option>
        <option value="coupon">Купоном</option>
      </select>
    </div>
    <input type="button" value="Ненужная кнопка">
    <!-- <button>Еще одна кнопка</button> Выполняет submit - для кнопок в формах, не отправляющих данные используйте <input type="button">-->
    <input type="reset" value="Очистить">
    <div>
      <input type="submit" value="Зарегистрироваться">
      <!--Отправляет данные формы на файл, прописанный в action c перезагрузкой страницы (или переходом на другую страницу) -->
    </div>
  </form>
</body>
</html>