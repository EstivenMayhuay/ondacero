<div class="newsContent">
    @if ($showFilter)
        <div class="newsContent__filter">
            <div class="d-flex justify-content-end mb-5">
                <button class="border-0 outline-0 px-3 py-2 shadow bg-white rounded" id="btnOpenFilterNews">
                    <i class='bx bx-filter-alt text-dark fw-bold'></i>
                    <span class="text-dark fw-bold">Filtros</span>
                </button>
            </div>

            <nav class="filters">
                <div class="accordion pb-5" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Categoria
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                @foreach ($categories as $category)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{$category->nombre}}" id="{{$category->nombre}}">
                                    <label class="form-check-label" for="{{$category->nombre}}">{{$category->nombre}}</label>
                                </div>
                                @endforeach
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Año
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                @for ($i = 0; $i < count($years); $i++)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$years[$i]->year}}" id="{{$years[$i]->year}}">
                                        <label class="form-check-label" for="{{$years[$i]->year}}">{{$years[$i]->year}}</label>
                                    </div>
                                @endfor
                            </ul>
                            {{--  <ul>
                                @foreach ($years as $index => $year)
                                @endforeach
                            </ul>  --}}
                        </div>
                      </div>
                    </div>
                    {{--  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Accordion Item #2
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>  --}}
                  </div>
            </nav>
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
            height: 0;
            overflow: hidden;
            transition: height 1s ease;
        }

        .filters__menu {
            padding: 0;
            list-style: none;
            margin: 0;
        }

        .filters.show {
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
            .news {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (min-width: 1200px) {
            .news {
                grid-template-columns: repeat(3, 1fr);
            }
        }

    </style>
</b:push>
