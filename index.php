<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>РМЦ Архангельская область</title>
</head>
<body>
    <!-- <div class="open-modal-btn add-quotation-btn position-absolute z-2 bg-white" style="top:10%; left:10%; width:100px;">
		<img src="images/modal-imgs/plus.svg" alt="plus_btn">
	</div>

	<div class="open-modal-btn edit-element-btn position-absolute z-2 bg-white" style="top:15%; left:10%; width:100px;">
		<img src="images/modal-imgs/plus.svg" alt="plus_btn">
	</div>

    <div class="open-modal-btn edit-partner-btn position-absolute z-2 bg-white" style="top:20%; left:10%; width:100px;">
		<img src="images/modal-imgs/plus.svg" alt="plus_btn">
	</div>

    <div class="open-modal-btn create-archive-btn position-absolute z-2 bg-white" style="top:25%; left:10%; width:100px;">
		<img src="images/modal-imgs/plus.svg" alt="plus_btn">
	</div> -->
    <header>
        <section class="section-hero">
            <div class="container p-lg-0">
                <!-- header с лого и названием организации -->
                <div class="row pt-3 d-flex justify-content-between align-items-center">
                    <div class="col-6 col-md-2 order-1">
                        <a href="https://pionerov.ru/"><img src="images/header-imgs/rmc-logo.svg" alt="rmc-logo" class="img-fluid logo"></a>
                    </div>
                    <div class="title-organization-container text-center col order-3 order-md-2 mx-auto pt-md-0 pt-2">
                        <p class="title-organization">
                            МИНИСТЕРСТВО ОБРАЗОВАНИЯ АРХАНГЕЛЬСКОЙ ОБЛАСТИ
                        </p>
                        <p class="title-organization-name">
                            ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ДОПОЛНИТЕЛЬНОГО ОБРАЗОВАНИЯ АРХАНГЕЛЬСКОЙ ОБЛАСТИ «ДВОРЕЦ ДЕТСКОГО И ЮНОШЕСКОГО ТВОРЧЕСТВА»
                        </p>
                    </div>
                    <div class="col-6 col-md-2 order-2 order-md-3 d-flex justify-content-end">
                        <a href="https://pionerov.ru/"><img src="images/header-imgs/family-year-white-logo.svg" alt="family-year-white-logo" class="img-fluid logo"></a>
                    </div>
                </div>
                
                <!-- Название конференции -->
                <div class="row mt-1 mt-lg-5">
                    <div class="col-12 text-center">
                        <p class="conference-title mb-0">
                            МЕЖРЕГИОНАЛЬНАЯ ПРАКТИКО-ОРИЕНТИРОВАННАЯ КОНФЕРЕНЦИЯ
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <h1 class="conference-name">
                            ДОПОЛНИТЕЛЬНОЕ ОБРАЗОВАНИЕ ДЕТЕЙ: <br> ОТ НОВЫХ ВОЗМОЖНОСТЕЙ ДО НОВЫХ РЕЗУЛЬТАТОВ
                        </h1>
                    </div>
                    <div class="col-12 mt-lg-4 text-center">
                        <p class="conference-date">
                            4 - 5 апреля 2024 года <br> Архангельск
                        </p>
                    </div>
                    <!-- Кнопки -->
                    <div class="col-12 mt-4 text-center">
                        <div class="btn btn-primary registration-btn open-modal-btn registration-select-modal-btn">
                            РЕГИСТРАЦИЯ
                        </div>
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <a href="#" class="btn btn-primary contacts-btn">
                            КОНТАКТЫ
                        </a>
                    </div>
                </div>
                <!-- Цитата -->
                <div class="row mt-5 d-lg-flex d-none">
                    <div class="col-xl-10 col-12 mx-auto">
                        <div id="quotationCarousel" data-bs-ride="carousel" class="carousel slide carousel-fade">
                            <div id="quotationCarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div data-bs-interval="15000"  class="carousel-item active">
                                        <div class="quotation-container d-flex flex-column flex-lg-row">
                                            <div class="avatar-container px-3 mx-auto pt-5">
                                                <div class="avatar-background">
                                                    <img src="images/quotation-persons/kravcov.png" class="img-fluid quotation-img-first" alt="avatar-image">
                                                </div>
                                                <img src="images/quotation-persons/kravcov.png" class="img-fluid quotation-img-second" alt="avatar-image">
                                            </div>
                                            <div class="quotation-text  mx-3 text-lg-start text-center">
                                                <p class="person-name">Сергей Кравцов</p>
                                                <p class="person-tenure">Министр просвещения Российской Федерации</p>
                                                <p class="quote">“Инфраструктура, созданная в рамках национального проекта «Образование», должна быть максимально загружена. Очень важно, чтобы система дополнительного образования соотносилась с основной школьной программой и дополняла ее»  Сергей Кравцов, Министр просвещения Российской Федерации”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-bs-interval="15000"  class="carousel-item">
                                        <div class="quotation-container d-flex flex-column flex-lg-row">
                                            <div class="avatar-container px-3 mx-auto pt-5">
                                                <div class="avatar-background">
                                                    <img src="images/quotation-persons/kravcov.png" class="img-fluid quotation-img-first" alt="avatar-image">
                                                </div>
                                                <img src="images/quotation-persons/kravcov.png" class="img-fluid quotation-img-second" alt="avatar-image">
                                            </div>
                                            <div class="quotation-text  mx-3 text-lg-start text-center">
                                                <p class="person-name">Сергей Кравцов</p>
                                                <p class="person-tenure">Министр просвещения Российской Федерации</p>
                                                <p class="quote">“Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia, qui voluptatum quo voluptatem iusto, minima ipsam officiis consequatur et dolorem tempora corporis natus iure quae. Enim exercitationem suscipit facilis consequuntur?”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-bs-interval="15000"  class="carousel-item">
                                        <div class="quotation-container d-flex flex-column flex-lg-row">
                                            <div class="avatar-container px-3 mx-auto pt-5">
                                                <div class="avatar-background">
                                                    <img src="images/quotation-persons/kravcov.png" class="img-fluid quotation-img-first" alt="avatar-image">
                                                </div>
                                                <img src="images/quotation-persons/kravcov.png" class="img-fluid quotation-img-second" alt="avatar-image">
                                            </div>
                                            <div class="quotation-text  mx-3 text-lg-start text-center">
                                                <p class="person-name">Сергей Кравцов</p>
                                                <p class="person-tenure">Министр просвещения Российской Федерации</p>
                                                <p class="quote">“Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia, qui voluptatum quo voluptatem iusto, minima ipsam officiis consequatur et dolorem tempora corporis natus iure quae. Enim exercitationem suscipit facilis consequuntur? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia, qui voluptatum quo voluptatem iusto, minima ipsam officiis consequatur et dolorem tempora corporis natus iure quae. Enim exercitationem suscipit facilis consequuntur?”</p>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#quotationCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#quotationCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#quotationCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <main>
        <!-- <section class="conference-cards">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-4 col-xl-3 col-xxl-2 mb-3">
                        <a href="#">
                            <div class="conference-card-wrap d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <img src="images/conference-cards-imgs/program.svg" alt="conference-img" class="img-fluid ">
                                    <p class="my-2">Программа</p>
                                    <button class="btn btn-primary">Перейти</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3 col-xxl-2 mb-3">
                        <a href="#">
                            <div class="conference-card-wrap d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <img src="images/conference-cards-imgs/program.svg" alt="conference-img" class="img-fluid ">
                                    <p class="my-2">Программа</p>
                                    <button class="btn btn-primary">Перейти</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3 col-xxl-2 mb-3">
                        <a href="#">
                            <div class="conference-card-wrap d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <img src="images/conference-cards-imgs/program.svg" alt="conference-img" class="img-fluid ">
                                    <p class="my-2">Программа</p>
                                    <button class="btn btn-primary">Перейти</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3 col-xxl-2 mb-3">
                        <a href="#">
                            <div class="conference-card-wrap d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <img src="images/conference-cards-imgs/program.svg" alt="conference-img" class="img-fluid ">
                                    <p class="my-2">Программа</p>
                                    <button class="btn btn-primary">Перейти</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3 col-xxl-2 mb-3">
                        <a href="#">
                            <div class="conference-card-wrap d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <img src="images/conference-cards-imgs/program.svg" alt="conference-img" class="img-fluid ">
                                    <p class="my-2">Программа</p>
                                    <button class="btn btn-primary">Перейти</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3 col-xxl-2 mb-3">
                        <a href="#">
                            <div class="conference-card-wrap d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <img src="images/conference-cards-imgs/program.svg" alt="conference-img" class="img-fluid ">
                                    <p class="my-2">Программа</p>
                                    <button class="btn btn-primary">Перейти</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="conference-archive mt-5 mb-5">
            <div class="container">
                <h2 class="archive-main-title">
                    История мероприятий
                </h2>
                <form action="" class="d-flex mt-3 mb-4">
                    <select class="form-select archive-select me-3">
                        <option value="2022" selected>2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                    <input type="submit" class="btn btn-primary" value="Поиск">
                </form>
                <div class="archive-block">
                    <h4 class="archive-title mb-5">Межрегиональная практико-ориентированная конференция <div>2022</div></h4>
                    <div class="archive-btns">
                        <button class="btn btn-primary mb-3">Программа</button>
                        <button class="btn btn-primary mb-3">Дистанционная выставка</button>
                        <button class="btn btn-primary mb-3">Сборник материалов</button>
                    </div>
                    <div class="archive-card row mb-4 d-flex flex-md-row flex-column-reverse">
                        <div class="col-md-6 col-12 archive-info mt-md-0 mt-3">
                            <p>Промежуточные итоги реализации Федерального проекта «Успех каждого ребенка» национального проекта «Образование» в Архангельской области</p>
                            <div class="archive-btn">
                                <a href="#" class="btn btn-primary">Перейти</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 archive-video">
                            <iframe src="https://vk.com/video_ext.php?oid=-186119133&id=456239196&hd=2" width="853" height="480" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="archive-card row d-flex flex-md-row flex-column-reverse">
                        <div class="col-md-6 col-12 archive-info mt-md-0 mt-3">
                            <p>Промежуточные итоги реализации Федерального проекта «Успех каждого ребенка» национального проекта «Образование» в Архангельской области</p>
                            <div class="archive-btn">
                                <a href="#" class="btn btn-primary">Перейти</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 archive-video">
                            <iframe src="https://vk.com/video_ext.php?oid=-186119133&id=456239196&hd=2" width="853" height="480" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example" class="mt-4 d-flex justify-content-center">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </section> -->

        <section class="contacts-table">
            <div class="container">
                <div class="row">
                    <h2 class="text-center my-4">Контакты</h2>
                    <table class="table mx-auto">
                        <thead>
                            <tr>
                                <th>ФИО</th>
                                <th>Должность</th>
                                <th>Телефон</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Шульгина Валентина Юрьевна</th>
                                <td>Директор</td>
                                <td>28-58-37</td>
                                <td>secretary@pionerov.ru</td>
                            </tr>
                            <tr>
                                <th>Афанасьева Елена Сергеевна</th>
                                <td>Заместитель директора по учебной работе</td>
                                <td>21-00-36</td>
                                <td>secretary@pionerov.ru</td>
                            </tr>
                            <tr>
                                <th>Марценковская Елена Анатольевна</th>
                                <td>Директор</td>
                                <td>28-58-38</td>
                                <td>zavuch@pionerov.ru</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <div class="partners" style="overflow-x:hidden;">
            <a href="#" class="partner">
                <img src="images/partners/1.jpeg" alt="">
            </a>
            <a href="#" class="partner">
                <img src="images/partners/2.jpg" alt="">
            </a>
            <a href="#" class="partner">
                <img src="images/partners/3.png" alt="">
            </a>
            <a href="#" class="partner">
                <img src="images/partners/4.svg" alt="">
            </a>
            <a href="#" class="partner">
                <img src="images/partners/5.jpg" alt="">
            </a>
            <a href="#" class="partner">
                <img src="images/partners/6.png" alt="">
            </a>
            <a href="#" class="partner">
                <img src="images/partners/7.png" alt="">
            </a>
            <a href="#" class="partner">
                <img src="images/partners/8.png" alt="">
            </a>
        </div>
    </main>

    <footer class="mt-5">
        <div class="container d-flex justify-content-between align-items-center flex-sm-row flex-column">
            <div class="footer-block my-sm-0 my-2">
                <div class="footer-text">
                    163000, Россия, г. Архангельск, ул. набережная Северной Двины, д.73
                </div>
                <div class="footer-text">
                    Телефон: 8(8182)28-66-16
                </div>
            </div>
            <div class="footer-block w-100 mx-0 mx-sm-2 my-sm-0 my-2">
                <div class="footer-text">
                    email: zammetod@pionerov.ru
                </div>
                <div class="footer-text">
                    email: navigator@pionerov.ru
                </div>
            </div>
            <a href="#" class="footer-link">
                <img src="images/footer-imgs/vk_logo.png" alt="" class="footer-img">
            </a>
        </div>
    </footer>

	<div class="modal add-quotation-modal min-vh-100 min-vw-100 position-fixed z-3">
		<div class="modal-bg position-fixed min-vh-100 min-vw-100 bg-black bg-opacity-50">
		</div>
		<div class="container min-vh-100">
			<div class="row min-vh-100">
				<div class="col-10 my-auto mx-auto bg-white rounded position-relative">
					<div class="col-12 d-flex mt-2">
						<img src="images/modal-imgs/x.svg" alt="exit_btn" class="exit-btn modal-exit-btn ms-auto">
					</div>
					<div class="col-12 mb-5">
						<h3 class="text-center">Добавление цитаты</h3>
					</div>
					<div class="col-12 px-5">
						<form action="" method="post" class="d-flex">
							<div class="col-3 px-3 d-flex flex-wrap justify-content-center">
								<div class="my-auto text-center">
									<img src="images/modal-imgs/person.svg" alt="default_img" class="mb-3">
									<input type="file" class="form-control" id="inputIconFile">
								</div>
							</div>
							<div class="col px-3">
								<div class="mb-3">
									<input type="text" class="form-control" id="namePersonOfQuotation" placeholder="Имя">
								</div>
								<div class="mb-3">
									<input type="text" class="form-control" id="statusPersonOfQuotation" placeholder="Должность">
								</div>
								<div class="mb-3">
									<textarea type="text" rows="6" class="form-control" id="quotationPersonOfQuotation" placeholder="Цитата"></textarea>
								</div>
							</div>
						</form>
					</div>
					<div class="col-12 d-flex mb-3">
						<button class="btn btn-primary ms-auto" type="submit">Сохранить</button>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<div class="modal edit-element-modal min-vh-100 min-vw-100 position-fixed z-3">
		<div class="modal-bg position-fixed min-vh-100 min-vw-100 bg-black bg-opacity-50">
		</div>
		<div class="container min-vh-100">
			<div class="row min-vh-100">
				<div class="col-10 my-auto mx-auto bg-white rounded position-relative">
					<form action="" method="post">
						<div class="col-12 d-flex mt-2">
							<img src="images/modal-imgs/x.svg" alt="exit_btn" class="exit-btn modal-exit-btn ms-auto">
						</div>
						<div class="col-12 mb-5">
							<h3 class="text-center">Редактирование элемента</h3>
						</div>
						<div class="col-12 px-5 d-flex flex-wrap">
							<div class="col-3 px-3">
								<div class="col-12 mb-3">
									<a href="#">
										<div class="conference-card-wrap d-flex align-items-center justify-content-center">
											<div class="text-center">
												<img src="images/conference-cards-imgs/program.svg" alt="conference-img" class="img-fluid ">
												<p class="my-2">Программа</p>
												<button class="btn btn-primary">Перейти</button>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col px-3">
								<div class="mb-3 d-flex">
									<label for="inputIconFile" class="form-label my-auto me-5">Иконка:</label>
									<input type="file" class="form-control" id="inputIconFile">
								</div>
								<div class="mb-3">
									<input type="text" class="form-control" id="nameOfElement" placeholder="Трансляция">
								</div>
								<div class="mb-3">
									<div class="form-check form-check-inline">
										<input class="form-check-input change-content-btn" type="radio" name="changeTypeOfElement" id="changeTypeOfElementRadio1" value="file" checked>
										<label class="form-check-label" for="changeTypeOfElementRadio1">Файл</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input change-content-btn" type="radio" name="changeTypeOfElement" id="changeTypeOfElementRadio2" value="link">
										<label class="form-check-label" for="changeTypeOfElementRadio2">Ссылка</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input change-content-btn" type="radio" name="changeTypeOfElement" id="changeTypeOfElementRadio3" value="content">
										<label class="form-check-label" for="changeTypeOfElementRadio3">Контент</label>
									</div>
								</div>
								<div class="mb-3 change-ground">
								</div>
							</div>
						</div>
						<div class="col-12 big-change-ground px-5 my-3">

						</div>
						<div class="col-12 d-flex mb-3">
							<button class="btn btn-primary ms-auto" type="submit">Сохранить</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</div>

    <div class="modal edit-partner-modal min-vh-100 min-vw-100 position-fixed z-3">
        <div class="modal-bg position-fixed min-vh-100 min-vw-100 bg-black bg-opacity-50">
        </div>
        <div class="container min-vh-100">
            <div class="row min-vh-100">
                <div class="col-10 my-auto mx-auto bg-white rounded position-relative">
                    <div class="col-12 d-flex mt-2">
                        <img src="images/modal-imgs/x.svg" alt="exit_btn" class="exit-btn modal-exit-btn ms-auto">
                    </div>
                    <div class="col-12 mb-5">
                        <h3 class="text-center">Редактирование партнеров</h3>
                    </div>
                    <div class="col-12 px-5">
                        <div class="col-12">
                            <button class="btn btn-primary ms-auto">Добавить партнера</button>
                        </div>
                        <div class="partners-edit mt-4 mb-4">
                            <form action="" method="post" class="d-flex align-items-center py-3 px-3 partner-edit-card">
                                <div class="close-icon">
                                    <img src="images/modal-imgs/close.png" alt="">
                                </div>
                                <div class="col-3 me-3">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="images/partners/1.jpeg" alt="" class="">
                                    </div>
                                </div>
                                <div class="col pe-5">
                                    <div class="mb-3 d-flex">
                                        <input type="file" class="form-control" id="inputIconFile">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="nameOfElement" placeholder="Ссылка">
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary ms-auto" type="submit">Сохранить</button>
                                    </div>
                                </div>
                            </form>
                            <form action="" method="post" class="d-flex align-items-center mt-4 mb-4 py-3 px-3 partner-edit-card">
                                <div class="close-icon">
                                    <img src="images/modal-imgs/close.png" alt="">
                                </div>
                                <div class="col-3 me-3">
                                    <div class="col-12  d-flex justify-content-center">
                                        <img src="images/partners/2.jpg" alt="" class="">
                                    </div>
                                </div>
                                <div class="col pe-5">
                                    <div class="mb-3 d-flex">
                                        <input type="file" class="form-control" id="inputIconFile">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="nameOfElement" placeholder="Ссылка">
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary ms-auto" type="submit">Сохранить</button>
                                    </div>
                                </div>
                            </form>
                            <form action="" method="post" class="d-flex align-items-center mt-4 mb-4 py-3 px-3 partner-edit-card">
                                <div class="close-icon">
                                    <img src="images/modal-imgs/close.png" alt="">
                                </div>
                                <div class="col-3 me-3">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="images/partners/3.png" alt="" class="">
                                    </div>
                                </div>
                                <div class="col pe-5">
                                    <div class="mb-3 d-flex">
                                        <input type="file" class="form-control" id="inputIconFile">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="nameOfElement" placeholder="Ссылка">
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary ms-auto" type="submit">Сохранить</button>
                                    </div>
                                </div>
                            </form>
                            <form action="" method="post" class="d-flex align-items-center mt-4 mb-4 py-3 px-3 partner-edit-card">
                                <div class="close-icon">
                                    <img src="images/modal-imgs/close.png" alt="">
                                </div>
                                <div class="col-3 me-3">
                                    <div class="col-12  d-flex justify-content-center">
                                        <img src="images/partners/5.jpg" alt="" class="">
                                    </div>
                                </div>
                                <div class="col pe-5">
                                    <div class="mb-3 d-flex">
                                        <input type="file" class="form-control" id="inputIconFile">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="nameOfElement" placeholder="Ссылка">
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary ms-auto" type="submit">Сохранить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal create-archive-modal min-vh-100 min-vw-100 position-fixed z-3">
        <div class="modal-bg position-fixed min-vh-100 min-vw-100 bg-black bg-opacity-50">
        </div>
        <div class="container min-vh-100">
            <div class="row min-vh-100">
                <div class="col-7 my-auto mx-auto bg-white rounded position-relative">
                    <div class="col-12 d-flex mt-2">
                        <img src="images/modal-imgs/x.svg" alt="exit_btn" class="exit-btn modal-exit-btn ms-auto">
                    </div>
                    <div class="col-12 mb-5">
                        <h3 class="text-center">Архивирование</h3>
                    </div>
                    <div class="row mx-5">
                        <div class="archive-create-card col-4 mb-4 ">
                            <div class="plus">
                                <img src="images/modal-imgs/plus.png" alt="">
                            </div>
                            <div class="inactive-archive">
                                <a href="#">
                                    <div class="conference-card-wrap d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <img src="images/conference-cards-imgs/program.svg" alt="conference-img" class="img-fluid ">
                                            <p class="my-2">Программа</p>
                                            <button class="btn btn-primary">Перейти</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="archive-create-card col-4 mb-4 ">
                            <div class="plus">
                                <img src="images/modal-imgs/plus.png" alt="">
                            </div>
                            <div class="inactive-archive">
                                <a href="#">
                                    <div class="conference-card-wrap d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <img src="images/conference-cards-imgs/program.svg" alt="conference-img" class="img-fluid ">
                                            <p class="my-2">Программа</p>
                                            <button class="btn btn-primary">Перейти</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="archive-create-card col-4 mb-4 ">
                            <div class="plus">
                                <img src="images/modal-imgs/plus.png" alt="">
                            </div>
                            <div class="inactive-archive">
                                <a href="#">
                                    <div class="conference-card-wrap d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <img src="images/conference-cards-imgs/program.svg" alt="conference-img" class="img-fluid ">
                                            <p class="my-2">Программа</p>
                                            <button class="btn btn-primary">Перейти</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="archive-create-card col-4 mb-4 ">
                            <div class="minus">
                                <img src="images/modal-imgs/minus.png" alt="">
                            </div>
                            <div class="active-archive">
                                <a href="#">
                                    <div class="conference-card-wrap d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <img src="images/conference-cards-imgs/program.svg" alt="conference-img" class="img-fluid ">
                                            <p class="my-2">Программа</p>
                                            <button class="btn btn-primary">Перейти</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="archive-create-card col-4 mb-4 ">
                            <div class="plus">
                                <img src="images/modal-imgs/plus.png" alt="">
                            </div>
                            <div class="inactive-archive">
                                <a href="#">
                                    <div class="conference-card-wrap d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <img src="images/conference-cards-imgs/program.svg" alt="conference-img" class="img-fluid ">
                                            <p class="my-2">Программа</p>
                                            <button class="btn btn-primary">Перейти</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="archive-create-card col-4 mb-4">
                            <div class="minus">
                                <img src="images/modal-imgs/minus.png" alt="">
                            </div>
                            <div class="active-archive">
                                <a href="#">
                                    <div class="conference-card-wrap d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <img src="images/conference-cards-imgs/program.svg" alt="conference-img" class="img-fluid ">
                                            <p class="my-2">Программа</p>
                                            <button class="btn btn-primary">Перейти</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 mb-5 d-flex justify-content-end">
                            <button class="btn btn-primary">Продолжить</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="modal registration-select-modal min-vh-100 min-vw-100 position-fixed z-3">
        <div class="modal-bg position-fixed min-vh-100 min-vw-100 bg-black bg-opacity-50">
        </div>
        <div class="container min-vh-100">
            <div class="row min-vh-100">
                <div class="col-lg-6 col-11 my-auto mx-auto bg-white rounded position-relative">
                    <form action="" method="post">
                        <div class="col-12 d-flex mt-2">
                            <img src="images/modal-imgs/x.svg" alt="exit_btn" class="exit-btn modal-exit-btn ms-auto">
                        </div>
                        <div class="col-12 mb-5">
                            <h3 class="text-center">Выбор регистрации</h3>
                        </div>
                        <div class="col-12 px-5 d-flex flex-column align-items-center registration-select-modal-wrapper">
                            
                            <ul class=" p-md-4 p-0">
                                <p class="me-auto">Для кого:</p>
                                <li class="ms-3">
                                    Администрация
                                </li>
                                <a href="#" class="btn btn-primary mb-3">ФОКУС-ГРУППА “Адреса опыта. Новые решения”</a>

                                <li class="ms-3">
                                    Администрация
                                </li>
                                <a href="#" class="btn btn-primary mb-3">ФОКУС-ГРУППА “Адреса опыта. Новые решения”</a>

                                <li class="ms-3">
                                    Администрация
                                </li>
                                <a href="#" class="btn btn-primary mb-3">ФОКУС-ГРУППА “Адреса опыта. Новые решения”</a>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/edit_element.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.marquee.min.js"></script>
    <script>
        $(function() {
            $('.partners').marquee({
                duration: 19000,
                startVisible: true,
                duplicated: true
            });
        });
    </script>
</body>
</html>