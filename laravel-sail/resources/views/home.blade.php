@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <div class="suggestion">
        <div class="cont_principal">
            <div class="cont_central">
                <div class="cont_modal">
                    <div class="cont_photo">
                        <div class="cont_img_back">
                            <img src="https://s-media-cache-ak0.pinimg.com/736x/57/98/9f/57989f2a2e186e38bf93429aa395120c.jpg" alt="" />
                        </div>
                        <div class="cont_icon_right">
                            <a href="#">  <i class="material-icons">&#xE8E7;</i></a>
                        </div>
                        <div class="cont_detalles">
                            <h3>Shakshuka à la Feta</h3>
                            <div class="cont-subdetalles">
                                <div class="sub_mins">
                                    <h3>50</h3>
                                    <span>MINS</span>
                                </div>
                                <div class="sub_mins">
                                    <h3>4</h3>
                                    <span>PERSONNES</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cont_btn_open_dets">
                        <a href="#  " onclick="open_close()"><i class="material-icons">&#xE314;</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="carousel">
        <div class="cont_principal">
            <div class="cont_central">
                <div class="cont_modal">
                    <div class="cont_photo">
                        <div class="cont_img_back">
                            <img src="https://s-media-cache-ak0.pinimg.com/736x/57/98/9f/57989f2a2e186e38bf93429aa395120c.jpg" alt="" />
                        </div>
                        <div class="cont_icon_right">
                            <a href="#">  <i class="material-icons">&#xE8E7;</i></a>
                        </div>
                        <div class="cont_detalles">
                            <h3>Shakshuka à la Feta</h3>
                            <div class="cont-subdetalles">
                                <div class="sub_mins">
                                    <h3>50</h3>
                                    <span>MINS</span>
                                </div>
                                <div class="sub_mins">
                                    <h3>4</h3>
                                    <span>PERSONNES</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cont_btn_open_dets">
                        <a href="#  " onclick="open_close()"><i class="material-icons">&#xE314;</i></a>
                    </div>

                </div>
                <div class="cont_modal">
                    <div class="cont_photo">
                        <div class="cont_img_back">
                            <img src="https://www.lapeniche.biz/la-peniche-slow-food-cafe/wp-content/uploads/sites/4/2019/06/peniche-slow-food-cafe-3-1.jpg" alt="" />
                        </div>
                        <div class="cont_icon_right">
                            <a href="#">  <i class="material-icons">&#xE8E7;</i></a>
                        </div>
                        <div class="cont_detalles">
                            <h3>Farandole de Légumes</h3>
                            <div class="cont-subdetalles">
                                <div class="sub_mins">
                                    <h3>50</h3>
                                    <span>MINS</span>
                                </div>
                                <div class="sub_mins">
                                    <h3>4</h3>
                                    <span>PERSONNES</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cont_btn_open_dets">
                        <a href="#" onclick="open_close()"><i class="material-icons">&#xE314;</i></a>
                    </div>

                </div>
                <div class="cont_modal">
                    <div class="cont_photo">
                        <div class="cont_img_back">
                            <img src="https://img.freepik.com/photos-gratuite/concept-cuisine-indienne-ailes-cuisses-poulet-au-four-dans-sauce-moutarde-au-miel-servir-plats-au-restaurant-assiette-noire-epices-indiennes-table-bois-image-fond_127425-18.jpg?w=2000" alt="" />
                        </div>
                        <div class="cont_icon_right">
                            <a href="#">  <i class="material-icons">&#xE8E7;</i></a>
                        </div>
                        <div class="cont_detalles">
                            <h3>Poulet Sauce Miel et Curry</h3>
                            <div class="cont-subdetalles">
                                <div class="sub_mins">
                                    <h3>50</h3>
                                    <span>MINS</span>
                                </div>
                                <div class="sub_mins">
                                    <h3>4</h3>
                                    <span>PERSONNES</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cont_btn_open_dets">
                        <a href="#" onclick="open_close()"><i class="material-icons">&#xE314;</i></a>
                    </div>
                </div>

                <div class="cont_modal">
                    <div class="cont_photo">
                        <div class="cont_img_back">
                            <img src="https://s-media-cache-ak0.pinimg.com/736x/57/98/9f/57989f2a2e186e38bf93429aa395120c.jpg" alt="" />
                        </div>
                        <div class="cont_icon_right">
                            <a href="#">  <i class="material-icons">&#xE8E7;</i></a>
                        </div>
                        <div class="cont_detalles">
                            <h3>Shakshuka à la Feta</h3>
                            <div class="cont-subdetalles">
                                <div class="sub_mins">
                                    <h3>50</h3>
                                    <span>MINS</span>
                                </div>
                                <div class="sub_mins">
                                    <h3>4</h3>
                                    <span>PERSONNES</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cont_btn_open_dets">
                        <a href="#  " onclick="open_close()"><i class="material-icons">&#xE314;</i></a>
                    </div>

                </div>
                <div class="cont_modal">
                    <div class="cont_photo">
                        <div class="cont_img_back">
                            <img src="https://www.lapeniche.biz/la-peniche-slow-food-cafe/wp-content/uploads/sites/4/2019/06/peniche-slow-food-cafe-3-1.jpg" alt="" />
                        </div>
                        <div class="cont_icon_right">
                            <a href="#">  <i class="material-icons">&#xE8E7;</i></a>
                        </div>
                        <div class="cont_detalles">
                            <h3>Farandole de Légumes</h3>
                            <div class="cont-subdetalles">
                                <div class="sub_mins">
                                    <h3>50</h3>
                                    <span>MINS</span>
                                </div>
                                <div class="sub_mins">
                                    <h3>4</h3>
                                    <span>PERSONNES</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cont_btn_open_dets">
                        <a href="#" onclick="open_close()"><i class="material-icons">&#xE314;</i></a>
                    </div>

                </div>
                <div class="cont_modal">
                    <div class="cont_photo">
                        <div class="cont_img_back">
                            <img src="https://img.freepik.com/photos-gratuite/concept-cuisine-indienne-ailes-cuisses-poulet-au-four-dans-sauce-moutarde-au-miel-servir-plats-au-restaurant-assiette-noire-epices-indiennes-table-bois-image-fond_127425-18.jpg?w=2000" alt="" />
                        </div>
                        <div class="cont_icon_right">
                            <a href="#">  <i class="material-icons">&#xE8E7;</i></a>
                        </div>
                        <div class="cont_detalles">
                            <h3>Poulet Sauce Miel et Curry</h3>
                            <div class="cont-subdetalles">
                                <div class="sub_mins">
                                    <h3>50</h3>
                                    <span>MINS</span>
                                </div>
                                <div class="sub_mins">
                                    <h3>4</h3>
                                    <span>PERSONNES</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cont_btn_open_dets">
                        <a href="#" onclick="open_close()"><i class="material-icons">&#xE314;</i></a>
                    </div>
                </div>

                <div class="cont_modal">
                    <div class="cont_photo">
                        <div class="cont_img_back">
                            <img src="https://s-media-cache-ak0.pinimg.com/736x/57/98/9f/57989f2a2e186e38bf93429aa395120c.jpg" alt="" />
                        </div>
                        <div class="cont_icon_right">
                            <a href="#">  <i class="material-icons">&#xE8E7;</i></a>
                        </div>
                        <div class="cont_detalles">
                            <h3>Shakshuka à la Feta</h3>
                            <div class="cont-subdetalles">
                                <div class="sub_mins">
                                    <h3>50</h3>
                                    <span>MINS</span>
                                </div>
                                <div class="sub_mins">
                                    <h3>4</h3>
                                    <span>PERSONNES</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cont_btn_open_dets">
                        <a href="#  " onclick="open_close()"><i class="material-icons">&#xE314;</i></a>
                    </div>

                </div>
                <div class="cont_modal">
                    <div class="cont_photo">
                        <div class="cont_img_back">
                            <img src="https://www.lapeniche.biz/la-peniche-slow-food-cafe/wp-content/uploads/sites/4/2019/06/peniche-slow-food-cafe-3-1.jpg" alt="" />
                        </div>
                        <div class="cont_icon_right">
                            <a href="#">  <i class="material-icons">&#xE8E7;</i></a>
                        </div>
                        <div class="cont_detalles">
                            <h3>Farandole de Légumes</h3>
                            <div class="cont-subdetalles">
                                <div class="sub_mins">
                                    <h3>50</h3>
                                    <span>MINS</span>
                                </div>
                                <div class="sub_mins">
                                    <h3>4</h3>
                                    <span>PERSONNES</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cont_btn_open_dets">
                        <a href="#" onclick="open_close()"><i class="material-icons">&#xE314;</i></a>
                    </div>

                </div>
                <div class="cont_modal">
                    <div class="cont_photo">
                        <div class="cont_img_back">
                            <img src="https://img.freepik.com/photos-gratuite/concept-cuisine-indienne-ailes-cuisses-poulet-au-four-dans-sauce-moutarde-au-miel-servir-plats-au-restaurant-assiette-noire-epices-indiennes-table-bois-image-fond_127425-18.jpg?w=2000" alt="" />
                        </div>
                        <div class="cont_icon_right">
                            <a href="#">  <i class="material-icons">&#xE8E7;</i></a>
                        </div>
                        <div class="cont_detalles">
                            <h3>Poulet Sauce Miel et Curry</h3>
                            <div class="cont-subdetalles">
                                <div class="sub_mins">
                                    <h3>50</h3>
                                    <span>MINS</span>
                                </div>
                                <div class="sub_mins">
                                    <h3>4</h3>
                                    <span>PERSONNES</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cont_btn_open_dets">
                        <a href="#" onclick="open_close()"><i class="material-icons">&#xE314;</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <style>
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTXhCUOGz7vYGh680lGh-uXM.woff) format('woff');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3T8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
        }
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSnhCUOGz7vYGh680lGh-uXM.woff) format('woff');
        }

        * {
            margin: 0px auto;
            padding: 0px;
            text-align: center;
            font-family: 'Open Sans', sans-serif;

        }

        .carousel {
            display: flex;
            flex-direction: row;
        }

            /* -------- ----------- */
        .cont_principal {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
        }


        .cont_central {
            position: absolute;
            width: 70%;
            top: 50%;
            margin-top: -200px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2vw;
        }

        .cont_modal {
            position: relative;
            width: 300px;
            /*height: 400px;*/

            margin: 0;
        }

        .cont_photo {
            position: relative;
            width: 300px;
            height: 440px;
            overflow: hidden;
            background-color: #eee;
            border-radius:5px;
            z-index: 2;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            transition: all 0.5s;
            box-shadow: 1px 1px 20px -5px rgba(0,0,0,0.5);
        }

        .cont_img_back {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius:5px ;
        }
        .cont_img_back > img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.9;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            transition: all 1s;
        }

        .cont_img_back:hover > img {
            transform: scale(1.5);
        }

        /*.cont_mins{*/
        /*    position: relative;*/
        /*    float: left;*/
        /*    width: 100%;*/
        /*    opacity: 1;*/
        /*}*/

        .sub_mins {
            position: relative;
            width: 60px;
            height: 60px;
            color: white;

            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 15px;

        }

        .sub_mins > h3 {
            font-size: 24px;
            margin-top: 7px;
            margin-bottom: -15px;
        }

        .sub_mins > span {
            font-size: 9px;
            font-weight: 700;
        }

        .cont_servings {
            position: relative;
            float: left;
            width: 60px;
            height: 60px;
            background-color: rgba(255,253,112,0.8);
            border-radius:50% ;
            margin: 16px;
            opacity: 1;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            transition-delay: 0.7s;
            -webkit-transition-delay: 0.7s;
            -o-transition-delay: 0.7s;
            transition-delay: 0.7s;
        }

        .cont_servings > h3 {
            font-size: 24px;
            margin-top: 5px;
            margin-bottom: -15px;
        }

        .cont_servings > span {
            font-size: 9px;
            font-weight: 700;
        }
        .cont_icon_right {
            position: relative;
            float: right;
            margin-top: 16px;
        }
        .cont_icon_right  > a  {
            margin: 16px;
            margin-top: 16px;
            color: #fff;
        }

        .cont_detalles {
            position: absolute;
            bottom:-185px;
            min-height: 160px;
            max-height: 250px;
            border-radius:5px ;
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+100,000000+101&0+0,0.65+68 */
            background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.65) 68%, rgba(0,0,0,0.65) 100%, rgba(0,0,0,0.65) 101%); /* FF3.6-15 */
            background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 68%,rgba(0,0,0,0.65) 100%,rgba(0,0,0,0.65) 101%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 68%,rgba(0,0,0,0.65) 100%,rgba(0,0,0,0.65) 101%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */


            width: 100%;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            transition-delay: 1.2s;
            -webkit-transition-delay: 0.7s;
            -o-transition-delay: 0.7s;
            transition-delay: 0.7s;}


        .cont_detalles > h3 {
            margin-top: 50px;
            color: #fff;
            font-size: 24px;
        }

        .cont_detalles > p {
            color: #fff;
            width: 80%;
            text-align:left;
            font-size: 14px;
        }

        .cont-subdetalles {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        /* ---------------- Css Tabs -------- */

        .cont_tabs > ul {
            width: 300px;
            background-color: #eee;
        }

        .cont_tabs > ul > li {
            position: relative;
            float: left;
            width: 50%;
            list-style: none;
        }

        .cont_tabs > ul > li > a {
            border-top: 7px solid #ED346C;
            position: relative;
            display: block;
            float: left;
            padding-top: 15px;
            color: #241C3E;
            text-decoration: none;
            margin-left: 15px;
            font-size: 14px;
        }

        .cont_tabs > ul > li:first-child > a
        {
            border-top: 7px solid rgba(237, 52, 108, 0);
            margin-top: 0px;
            color: #9A96A4;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            transition: all 0.2s;
        }

        .cont_tabs > ul > li:first-child > a:hover {
            border-top: 7px solid #fcfcfc;
            padding-top: 15px;
            color: #241C3E;
            margin-top: 0px;
        }

        .cont_btn_open_dets  > a {
            display: block;
            position: relative;
            top: -15px;
            z-index: 10;
            width: 30px;
            height: 30px;
            background: rgb(255,180,141);
            background: linear-gradient(45deg, rgba(255,180,141,1) 0%, rgba(255,154,128,1) 100%);
            border-radius:50% ;
            color: #fff;
            box-shadow: 0px 0px 20px -2px rgb(255,180,141);
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            transition: all 0.5s;
            transform: rotate(90deg);

        }


        .cont_btn_open_dets  > a > i {
            margin-top: 3px;
        }

        .cont_title_preparation > p {
            font-weight: 700;
            font-size: 14px;
            margin-left: 40px;
            text-align: left;
            color: #36354E;
        }

        .cont_info_preparation > p {
            margin: 5px 0px;
            margin-left: 50px;
            border-left: 2px solid #E3E3E3;
            font-size: 12px;
            padding: 20px 0px;
            padding-left: 20px;
            text-align: left;
            padding-right: 15px;
            color: #565656;
        }

        .cont_btn_mas_dets > a {
            color: #36354E;
        }

        .cont_modal_active  > .cont_btn_open_dets > a {
            transform: rotate(270deg);
        }

        .cont_modal_active {
        }

        .cont_modal_active > .cont_photo {
            box-shadow: 25px 10px 70px -5px rgba(0,0,0,0.3);
        }

        .cont_modal_active > .cont_photo > .cont_mins > .sub_mins {
            opacity: 1;
        }

        .cont_modal_active  > .cont_photo > .cont_servings {
            opacity: 1;
        }

        .cont_modal_active > .cont_photo  > .cont_detalles{
            bottom: 0px;
        }

    </style>

    <script>

        let recipe = document.querySelectorAll('.cont_modal');

        recipe.forEach(function(recipe){
            recipe.addEventListener('click', function(){
                this.classList.toggle('cont_modal_active');
            });
        });

    </script>

@endsection


