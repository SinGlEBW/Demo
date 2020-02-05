/* Скрывает лишнюю анимацию при перезагрузке страницы */
	let wrapForm = document.querySelector(".wrap-form");

	const date_picker_element = document.querySelector('.date-picker');
	const selectedElement = document.querySelector('.selected-date');//точка опоры для создания класса active
	const dates_element = document.querySelector('.dates');
	const monthElement = document.querySelector('.mth');
	const nextMonth = document.querySelector('.next-mth');
	const prevMonth = document.querySelector('.prev-mth');
	const days_element = document.querySelector('.days');

	
	
	
if(wrapForm != null){
	let formaRegDiv = document.querySelector(".forma_registration");
	window.onload = function(){
		formaRegDiv.style.display = "block";
	}
	const months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
	/* объекты с сегодняшним днём */
	let date = new Date();
	let day = date.getDate();
	let month = date.getMonth();
	let year = date.getFullYear();
	/* объекты переменные для изменения дня */
	let selectedDate = date;
	let selectedDay = day;
	let selectedMonth = month;
	let selectedYear = year;


	console.dir();

	monthElement.textContent = months[month] + ' ' + year;

	selectedElement.textContent = formatDate(date); //выводит дату 26 / 01 / 2020
	//selectedElement.dataset.value = selectedDate;// почитать зачем нужно закидывать значение в dataset:{DOMStringMap}.value

	 populateDates();
	
	//--Событие добавляет и убирает календарь
	selectedElement.addEventListener('click', () => dates_element.classList.toggle('active'));

	//--Событие для стрелки вперёд, назад
	nextMonth.addEventListener('click', arrowEvent);
	prevMonth.addEventListener('click', arrowEvent);

	function arrowEvent (e) {

		if(this == nextMonth){
			month++;
			if (month > 11) {
				month = 0;
				year++;
			}
		}else{
			month--;
			if(month < 0){
				month = 11;
				year--;
			}
		}
		console.dir(month);
		monthElement.textContent = months[month] + ' ' + year;
		populateDates();
	
}




	function populateDates (e) {
		days_element.innerHTML = '';
		let amount_days = 31;
		
		if(month < 7){
			if(month%2){
				amount_days  =  30;
			}
		}else{
			amount_days = (month%2) ? 31 : 30;
		}
		
		if (month == 1){
			amount_days = 28;
		}



		for (let i = 0; i < amount_days; i++) {
			const dayElem = document.createElement('div');
			dayElem.classList.add('day');
			dayElem.textContent = i + 1;

			if (selectedDay == (i + 1) && selectedYear == year && selectedMonth == month) {
				dayElem.classList.add('selected');
			}

			dayElem.addEventListener('click', function () {
				selectedDate = new Date(year + '-' + (month + 1) + '-' + (i + 1));
				selectedDay = (i + 1);
				selectedMonth = month;
				selectedYear = year;

				selectedElement.textContent = formatDate(selectedDate);
				// selectedElement.dataset.value = selectedDate;

				populateDates();
			});

			days_element.appendChild(dayElem);
		}
	}




	/*---Меняет заданное число при выборе другова--- */
	function formatDate (d) {
		/*--просто добавляет 0 числам меньше 10 */
		let day = d.getDate();
		
		if (day < 10) {
			day = '0' + day;
		}
	/*--тоже самое + корректирует начала месяца с 1, а не с 0 числам*/
		let month = d.getMonth() + 1;
		if (month < 10) {
			month = '0' + month;
		}

		let year = d.getFullYear();

		return day + ' / ' + month + ' / ' + year; // возвращает результат сегодняшней даты в таком формате
	}
}



/*Имеется массив с месяцами "months", также имеется переменная которая меняется от 0 - 11 "month" в зависимости от настоящего месяца или 
  от события кликов. Задача на основе изменений переменной "month" проверять какое у неё значение. 
  Если значения 0, 2, 4, 6
  				, 7, 9, 11 - то присвоить 31*/
 
