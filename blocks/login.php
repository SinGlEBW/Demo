                        <div class="wrap-form">   
							<h5> Личный кабинет</h5>
						
							<form id="formLink">
								<div class="wrap_input">
									<input class="inputs" type="text" name="logLink" required >
									<label>Введите логин</label>
								</div>
								<div class="wrap_input">
									<input class="inputs" type="password" name="passLink" required >
									<label>Введите пароль</label>
								</div>
								<input class="submit-link" type ="submit" name ="submitLink" value="Вход">																								
							</form>
							
							<input id="touch-2" type="checkbox"> <!--Кнопка для регистрации -->
							<label class="l-button-reg" for="touch-2">Регистрация</label>   <!--Кнопка сделана из лейбла -->
							
							<div class="forma_registration">    
								<div class="wrap__registration"> 
									<label for="touch-2"><div class="close-X"></div></label> 
									<h4>Регистрация</h4>
					
									<form id="formReg">
										<input class="inputs"  type="text" name="logReg"  placeholder="Логин:">
										<input class="inputs"  type="text" name="fullNameReg"  placeholder="ФИО:">
										<input class="inputs"  type="text" name="emailReg"  placeholder="Email:">
										<div class="date-picker">
											<div class="selected-date inputs"></div>

											<div class="dates">
												<div class="month">
													<div class="arrows prev-mth">&lt;</div>
													<div class="mth"></div>
													<div class="arrows next-mth">&gt;</div>
												</div>

												<div class="days"></div>
											</div>
										</div>
										
										<div class="inputs">
											<input type="file" name="avatar" id = "file">
											<label class="label-file" for="file"><img src="images/avatar.svg" alt="AVA"></label>
											
										</div>
										<div class="wrap-radio">
											<label class="l-radio__gender"><img src="images/man.svg" alt="man"><input class="gender" type="radio" name="gender" value = "M" checked><i></i>Мужской</label>
											<label class="l-radio__gender"><img src="images/woman.svg" alt="man"><input class="gender" type="radio" name="gender" value = "W"><i></i>Женский</label>
										</div>
										<input class="inputs"  type="password" name="passReg"  placeholder="Пароль:">
										<input class="inputs"  type="password" name="passConfirmReg"  placeholder="Повторите пароль:">
										<input class="submit-reg" type="submit" name="submitReg" value="Зарегистрироваться" >
										
									</form>
									
								</div>
							</div>						
						</div> 