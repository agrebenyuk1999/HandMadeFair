@extends('layouts.app')

@section('content')
    <div class="container">
        <aside>
            <form action="#" method="post" class="filter__form">
                <div class="form__select__cat">
                    <select name="categoryList" id="">
                        <span>sd</span>
                        <option value="" disabled selected>Категории</option>
                        <option value="1">Кат1</option>
                        <option value="2">Кат2</option>
                        <option value="3">Кат3</option>
                    </select>
                </div>
                <div class="filter__price__block">
                    <span class="price__text">Диапазон цен, грн.</span>
                    <input type="number" placeholder="От">
                    <input type="number" placeholder="До">
                </div>
                <div class="filter__age__block">
                    <span class="age__text">Возраст</span>
                    <div class="form__select__age">
                        <select name="ageList" id="">
                            <option value="0">Не имеет значения</option>
                            <option value="1">10 лет</option>
                            <option value="1">20 лет</option>
                        </select>
                    </div>
                </div>
                <div class="filter__btns__block">
                    <button>Сброс всех фильтров</button>
                    <button type="submit">Применить фильтры</button>
                </div>
            </form>
        </aside>
        <section class="search__products__list">
            <form action="#" method="post" class="search__form" id="search__form">
                <input type="text" placeholder="Поиск..." v-model="search">
                <button class="clear__search__btn" v-on:click = "clearSearch"><i class="fas fa-times"></i></button>
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
            <section class="new__products__list">
                <div class="new__title">Новинки</div>
                <div class="product__cards">
                    <div class="product__card">
                        <a href="#" class="link__card">
                            <img src="img/card__img.jpg" alt="">
                            <span class="card__title">Изысканный браслет ручной работы</span>
                            <span class="price__card">150 грн.</span>
                        </a>
                        <a href="#" class="view__btn">Просмотреть</a>
                        <a href="#" class="add__to__cart__btn">Добавить в корзину</a>
                    </div>
                    <div class="product__card">
                        <a href="#" class="link__card">
                            <img src="img/img2.jpg" alt="">
                            <span class="card__title">Изысканный браслет ручной работы</span>
                            <span class="price__card">150 грн.</span>
                        </a>
                        <a href="#" class="view__btn">Просмотреть</a>
                        <a href="#" class="add__to__cart__btn">Добавить в корзину</a>
                    </div>
                    <div class="product__card">
                        <a href="#" class="link__card">
                            <img src="img/img2.jpg" alt="">
                            <span class="card__title">Изысканный браслет ручной работы</span>
                            <span class="price__card">150 грн.</span>
                        </a>
                        <a href="#" class="view__btn">Просмотреть</a>
                        <a href="#" class="add__to__cart__btn">Добавить в корзину</a>
                    </div>
                </div>
            </section>
            <section class="all__product__list">
                <div class="all__product__title">Все изделия</div>
                <div class="product__cards">
                    <div class="product__card">
                        <a href="#" class="link__card">
                            <img src="img/card__img.jpg" alt="">
                            <span class="card__title">Изысканный браслет ручной работы</span>
                            <span class="price__card">150 грн.</span>
                        </a>
                        <a href="#" class="view__btn">Просмотреть</a>
                        <a href="#" class="add__to__cart__btn">Добавить в корзину</a>
                    </div>
                    <div class="product__card">
                        <a href="#" class="link__card">
                            <img src="img/img2.jpg" alt="">
                            <span class="card__title">Изысканный браслет ручной работы</span>
                            <span class="price__card">150 грн.</span>
                        </a>
                        <a href="#" class="view__btn">Просмотреть</a>
                        <a href="#" class="add__to__cart__btn">Добавить в корзину</a>
                    </div>
                    <div class="product__card">
                        <a href="#" class="link__card">
                            <img src="img/img2.jpg" alt="">
                            <span class="card__title">Изысканный браслет ручной работы</span>
                            <span class="price__card">150 грн.</span>
                        </a>
                        <a href="#" class="view__btn">Просмотреть</a>
                        <a href="#" class="add__to__cart__btn">Добавить в корзину</a>
                    </div>
                    <div class="product__card">
                        <a href="#" class="link__card">
                            <img src="img/img2.jpg" alt="">
                            <span class="card__title">Изысканный браслет ручной работы</span>
                            <span class="price__card">150 грн.</span>
                        </a>
                        <a href="#" class="view__btn">Просмотреть</a>
                        <a href="#" class="add__to__cart__btn">Добавить в корзину</a>
                    </div>
                    <div class="product__card">
                        <a href="#" class="link__card">
                            <img src="img/img2.jpg" alt="">
                            <span class="card__title">Изысканный браслет ручной работы</span>
                            <span class="price__card">150 грн.</span>
                        </a>
                        <a href="#" class="view__btn">Просмотреть</a>
                        <a href="#" class="add__to__cart__btn">Добавить в корзину</a>
                    </div>
                    <div class="product__card">
                        <a href="#" class="link__card">
                            <img src="img/img2.jpg" alt="">
                            <span class="card__title">Изысканный браслет ручной работы</span>
                            <span class="price__card">150 грн.</span>
                        </a>
                        <a href="#" class="view__btn">Просмотреть</a>
                        <a href="#" class="add__to__cart__btn">Добавить в корзину</a>
                    </div>
                    <div class="product__card">
                        <a href="#" class="link__card">
                            <img src="img/img2.jpg" alt="">
                            <span class="card__title">Изысканный браслет ручной работы</span>
                            <span class="price__card">150 грн.</span>
                        </a>
                        <a href="#" class="view__btn">Просмотреть</a>
                        <a href="#" class="add__to__cart__btn">Добавить в корзину</a>
                    </div>
                    <div class="product__card">
                        <a href="#" class="link__card">
                            <img src="img/img2.jpg" alt="">
                            <span class="card__title">Изысканный браслет ручной работы</span>
                            <span class="price__card">150 грн.</span>
                        </a>
                        <a href="#" class="view__btn">Просмотреть</a>
                        <a href="#" class="add__to__cart__btn">Добавить в корзину</a>
                    </div>
                    <div class="product__card">
                        <a href="#" class="link__card">
                            <img src="img/img2.jpg" alt="">
                            <span class="card__title">Изысканный браслет ручной работы</span>
                            <span class="price__card">150 грн.</span>
                        </a>
                        <a href="#" class="view__btn">Просмотреть</a>
                        <a href="#" class="add__to__cart__btn">Добавить в корзину</a>
                    </div>
                </div>
                <div class="pagination">
                    <a href="#">Назад</a>
                    <a href="#"><<</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#" id="pagination__active">3</a>
                    <a href="#">4</a>
                    <a href="#">...</a>
                    <a href="#">>></a>
                    <a href="#">Вперед</a>
                </div>
            </section>
        </section>
    </div>
@endsection
