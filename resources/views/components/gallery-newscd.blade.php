<div class="newsContent">
    @if ($showFilter)
        <div class="newsContent__filter">
            <div class="d-flex justify-content-end mb-5">
                <div class="filters me-4">
                    <form id="frmFiltersNews" class="d-flex align-items-center justify-content-center h-100" method="GET">
                        <div class="input-group input-group-sm me-4 position-relative">
                            <span class="input-group-text py-2 px-4 bg-transparent border-0 fw-bold" >Categorías</span>
                            <select class="form-select form-select-sm shadow-none border-0" aria-label=".form-select-sm example" name="categoria" required>
                                <option hidden></option>
                                @foreach ($categories as $category)
                                    @if (request()->has('categoria') && request()->input('categoria') == $category->alias)
                                        <option value="{{$category->alias}}" selected>{{$category->nombre}}</option>
                                    @else
                                        <option value="{{$category->alias}}">{{$category->nombre}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group input-group-sm position-relative">
                            <span class="input-group-text py-2 px-4 border-0 bg-transparent fw-bold">Año</span>
                            <select class="form-select form-select-sm shadow-none border-0" aria-label=".form-select-sm example" name="year" required>
                                <option hidden></option>

                                @for ($i = 0; $i < count($years); $i++)
                                    @if (request()->has('year') && request()->input('year') == $years[$i]->year)
                                        <option value="{{$years[$i]->year}}" selected>{{$years[$i]->year}}</option>
                                    @else
                                        <option value="{{$years[$i]->year}}">{{$years[$i]->year}}</option>
                                    @endif
                                @endfor
                            </select>
                        </div>
                    </form>
                </div>
                <button class="border-0 outline-0 px-3 py-2 onda-bg-primary rounded" id="btnOpenFilterNews"  type="submit" form="frmFiltersNews">
                    <i class='bx bx-filter-alt text-dark fw-bold'></i>
                    <span class="text-dark fw-bold">Filtrar</span>
                </button>
            </div>

        </div>
    @endif
    <div class="news">
        @foreach ($news as $new)
            <article class="news__item">
                <div class="news__image">
                    <img src="https://ondacero.com.pe/j/images/galerias/{{$new->urlPhoto}}" alt="" width="220" loading="lazy">
                </div>
                <p class="news__category">{{$new->catName}}</p>
                <div class="news__info pt-2">
                    <h2 class="news__title"><a href="" title="{{$new->title}}">{{$new->title}}</a></h2>
                    <span class="news__date">{{formatHumanPassedTime($new->fecCreado)}}</span>
                </div>
            </article>
        @endforeach
    </div>
</div>

<b:push>
    <style>
        .newsContent {
            width: 100%;
        }

        .news {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .news__item {
            width: 100%;
            height: auto;
            padding: 1rem;
            overflow: hidden;
            background-color: #fff;
        }

        .news__image {
            aspect-ratio: 16/12;
            border-radius: 8px;
            overflow: hidden;
        }

        .news__image img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .news__title {
            font-weight: 700;
            font-size: 1rem;
        }

        .news__title a {
            color: #606060;
            text-decoration: none;
        }

        .news__date {
            color: #808080;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .news__category {
            margin-top: 1.5rem;
            background-color: #ffda34;
            padding: 0.25rem 1rem;
            font-size: 0.65rem;
            border-radius: 6px;
            font-weight: 700;
            color: #262b31;
            display: inline-block;
        }

        .newsContent__filter button:active {
            transform: scale(0.85);
            transition: transform 0.5s linear;
        }

        .filters {
            height: auto;
            overflow: hidden;
            transition: height 1s ease;
        }

        @media screen and (min-width: 768px) {
            .news {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (min-width: 1024px) {
            .filters > .accordion {
            }
        }

        @media screen and (min-width: 1200px) {
            .news {
                grid-template-columns: repeat(3, 1fr);
            }
        }

    </style>
</b:push>
