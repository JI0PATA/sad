@extends('layouts.app')

@section('content')
    <section class="page wp">
        <div class="hor-center">
            <h1 class="title">документы</h1>
        </div>
        <div class="page__description">
            {{--<a href="{{ asset('documents/2-kh_ned_menyu.xls') }}" download>2-х недельное меню</a><br>
            <a href="{{ asset('documents/raspisanie_na_2017-18_g_1.pdf') }}" download>Расписание на 2017-18 гг.</a><br>
            <a href="{{ asset('documents/Ustav_2015_Berezka.pdf') }}" download>Устав 2015 Березка</a><br>--}}

            <div>
                <h3>Нормативно-правовые документы</h3>
                <ul>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D0%BB%D0%B0%D0%BD%20%D1%84%D0%B8%D0%BD%D0%B0%D0%BD%D1%81%D0%BE%D0%B2%D0%BE%D0%B9%20%D0%B4%D0%B5%D1%8F%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D0%B8.xls" target="_blank">План финансовой деятельности</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%BF%D0%BE%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BE%20%D0%B7%D0%B0%D0%BA%D1%80%D0%B5%D0%BF%D0%BB%D0%B5%D0%BD%D0%B8%D0%B8%20%D1%82%D0%B5%D1%80%D1%80%D0%B8%D1%82%D0%BE%D1%80%D0%B8%D0%B9(3).pdf" target="_blank">Постановление о закреплении территорий</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%94%D0%BE%D0%B3%D0%BE%D0%B2%D0%BE%D1%80%20%D1%81%20%D1%83%D1%87%D1%80%D0%B5%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D0%B5%D0%BC(7).pdf" target="_blank">Договор между учредителем и МБДОУ</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%BF%D1%80%D0%B5%D1%81%D1%81-%D1%80%D0%B5%D0%BB%D0%B8%D0%B7%20%D0%BF%D0%BE%20%D1%80%D0%BE%D0%B4%D0%BF%D0%BB%D0%B0%D1%82%D0%B5%20(1)(3).docx" target="_blank">Пресс-релиз по родплате</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D0%BE%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BD%D0%B0%202015%20%D0%B3%D0%BE%D0%B4%20%D0%BF%D0%BE%20%D0%94%D0%9E%D0%A3(9).pdf" target="_blank">Постановление на 2015 год по ДОУ</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D1%80%D0%B5%D0%B4%D0%BF%D0%B8%D1%81%D0%B0%D0%BD%D0%B8%D0%B5%20%D0%A1%D0%9F.pdf" target="_blank">Предписание об устранении нарушений Управления Роспотребнадзора</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D1%80%D0%B5%D0%B4%D0%BF%D0%B8%D1%81%D0%B0%D0%BD%D0%B8%D0%B5%20%D0%9F%D0%96.pdf" target="_blank">Предписание об устранении нарушений требований пожарной безопасности</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D1%80%D0%B5%D0%B4%D0%BF%D0%B8%D1%81%D0%B0%D0%BD%D0%B8%D0%B5%20%D0%9E%D0%9D.jpeg" target="_blank">Постановление о территориальном закреплении на 2015 год</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%BE%D1%82%D1%87%D0%B5%D1%82%202(4).doc" target="_blank">Отчет по предписанию департамента надзора и контроля в сфере образования и науки РТ</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%A0%D0%B8%D1%81%D1%83%D0%BD%D0%BE%D0%BA%20(10)(38).jpg" target="_blank">Приказ о зачислении ребенка Зарипова Амира</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%A0%D0%B8%D1%81%D1%83%D0%BD%D0%BE%D0%BA%20(11)(39).jpg" target="_blank">Приказ о зачислении Залялова Рамазана</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%A0%D0%B8%D1%81%D1%83%D0%BD%D0%BE%D0%BA%20(12)(22).jpg" target="_blank">Приказ о зачислении Валиева Ильдара</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D0%BE%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BF%D0%BE%20%D0%94%D0%94%D0%A3%202016%20%D0%B3%D0%BE%D0%B4(4).pdf" target="_blank">Постановление по ДДУ 2016 год</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%A0%D0%9E%D0%94%D0%9F%D0%9B%D0%90%D0%A2%D0%90%20%D0%9F%D1%80%D0%B5%D1%81%D1%81%20-%D1%80%D0%B5%D0%BB%D0%B8%D0%B7(12).doc" target="_blank">Родплата</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%A1%D1%80%20%D1%80%D0%B0%D0%B7%D0%BC%D0%B5%D1%80%20%D1%80%D0%BE%D0%B4%20%D0%BF%D0%BB%D0%B0%D1%82%D1%8B%20%D0%BD%D0%B0%202016%20%D0%B3%D0%BE%D0%B4,%20%D0%BF%D0%BE%D1%81%D1%82%20%D0%9A%D0%9C%20%D0%A0%D0%A2%20727%20%D0%BE%D1%82%2030_09_15(1).pdf" target="_blank">Ср. размер род платы на 2016 год, пост. КМ РТ 727 от 30.09.15г</a></li>
                    <li><a href="https://edu.tatar.ru/upload/storage/org3301/files/%D0%9F%D0%BE%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5%202016%20%D0%B4%D0%B4%D1%83(2).pdf" target="_blank">Постановление 2016 "О повышении родительских взносов"</a></li>
                    <li><a href="https://edu.tatar.ru/upload/storage/org3301/files/%D0%BF%D0%B0%D1%81%D0%BF%D0%BE%D1%80%D1%82%20%D0%B4%D0%BE%D1%80_%D0%B1%D0%B5%D0%B7%D0%BE%D0%BF%D0%B0%D1%81%D0%BD%D0%BE%D1%81%D1%82%D0%B8(3).pdf" target="_blank">Паспорт дор_безопасности</a></li>
                    <li><a href="https://edu.tatar.ru/upload/storage/org3301/files/%D0%BF%D0%B0%D1%81%D0%BF%D0%BE%D1%80%D1%82%20%D0%9F%D0%94%D0%94-2017(1).pdf" target="_blank">Паспорт ПДД-2017</a></li>
                </ul>
            </div><br>
            <div>
                <h3>Локальные акты</h3>
                <ul>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BE%20%D0%BB%D0%BE%D0%B3%D0%BE%D0%BF%D1%83%D0%BD%D0%BA%D1%82%D0%B5.pdf" target="_blank">Положение о логопункте</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%BA%D0%BE%D0%BB%D0%B5%D0%BA%D1%82_%D0%B4%D0%BE%D0%B3%D0%BE%D0%B2%D0%BE%D1%80_2014(2).doc" target="_blank">Коллективный договор</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D0%B0%20%D0%B2%D0%BD%D1%83%D1%82%D1%80%D0%B5%D0%BD%D0%BD%D0%B5%D0%B3%D0%BE%20%D1%82%D1%80%D1%83%D0%B4_%20%D1%80%D0%B0%D1%81%D0%BF%D0%BE%D1%80(1).pdf" target="_blank">Правила внутреннего трудового распорядка</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%BF%D0%A0%D0%98%D0%9B%D0%9E%D0%96%D0%95%D0%9D%D0%98%D0%95%20%E2%84%962%20%D0%9A%20%D0%9A%D0%9E%D0%9B%D0%9B%D0%95%D0%9A%D0%A2%20%D0%94%D0%9E%D0%93%D0%9E%D0%92%D0%9E%D0%A0%D0%A3.doc" target="_blank">Приложение №2 к коллект. договору Права и льготы</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BE%20%D0%BC%D0%B5%D1%82%D0%BE%D0%B4%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B9%20%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B5(1).pdf" target="_blank">Положение о методический работе</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BE%20%D0%BF%D0%B5%D0%B4%D0%B0%D0%B3%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%BC%20%D1%81%D0%BE%D0%B2%D0%B5%D1%82%D0%B5(96).pdf" target="_blank">Положение о педагогическом совете</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BE%20%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0%D1%85%20%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F%20%D0%B2%20%D0%9C%D0%91%D0%94%D0%9E%D0%A3.pdf" target="_blank">Положение о языках образования в МБДОУ</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D0%B0%20%D0%B2%D0%BD%D1%83%D1%82%D1%80%D0%B5%D0%BD%D0%BD%D0%B5%D0%B3%D0%BE%20%D1%80%D0%B0%D1%81%D0%BF%D0%BE%D1%80%D1%8F%D0%B4%D0%BA%D0%B0%20%D0%B2%D0%BE%D1%81%D0%BF%D0%B8%D1%82%D0%B0%D0%BD%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2(9).pdf" target="_blank">Правила внутреннего распорядка воспитанников</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D0%B0%20%D0%BF%D1%80%D0%B8%D0%B5%D0%BC%D0%B0%20%D0%B4%D0%B5%D1%82%D0%B5%D0%B9(5).pdf" target="_blank">Правила приема детей</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9F%D0%BE%D1%80%D1%8F%D0%B4%D0%BE%D0%BA%20%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8,%20%D0%BF%D1%80%D0%B8%D0%BD%D1%8F%D1%82%D0%B8%D1%8F%20%D0%B8%20%D1%83%D1%82%D0%B2%D0%B5%D1%80%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D1%8F%20%D0%9B%D0%9D%D0%90.pdf" target="_blank">Порядок разработки, принятия и утверждения ЛНА</a></li>
                </ul>
            </div><br>
            <div>
                <h3>Сведения об условиях питания</h3>
                <ul>
                    <li><a href="https://edu.tatar.ru/upload/images/files/2-%D1%85%20%D0%BD%D0%B5%D0%B4_%20%D0%BC%D0%B5%D0%BD%D1%8E.xls" target="_blank">2-х недельное меню</a></li>
                </ul>
            </div><br>
            <div>
                <h3>Образовательные стандарты (Белем стандартлары)</h3>
                <ul>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%A4%D0%93%D0%9E%D0%A1-+%D0%94%D0%9E%D0%A3+-2014+%D0%B3%D0%BE%D0%B4(1).pdf" target="_blank">ФГОС-ДОУ</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%C2%AB%D0%9A%D0%BE%D1%80%D1%80%D0%B5%D0%BA%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%BA%D0%B0%20%D0%9E%D1%81%D0%BD%D0%BE%D0%B2%D0%BD%D0%BE%D0%B9%20%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B9%20%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D1%8B%20%D0%B4%D0%BE%D1%88%D0%BA%D0%BE%D0%BB%D1%8C%D0%BD%D0%BE%D0%B9(1).ppt" target="_blank">"Корректировка Основной образовательной программы дошкольной организации"</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D1%80%D0%B0%D0%B7%D0%B4%D0%B5%D0%BB%20%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B9%20%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D1%8B.ppt" target="_blank">Содержательный раздел образовательной программы</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%9C%D0%B5%D1%80%D0%BE%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D1%8F%20%D0%BF%D0%BE%20%D0%B2%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%B8%D1%8E%20%D0%A4%D0%93%D0%9E%D0%A1(1).ppt" target="_blank">Мероприятия по введению ФГОС</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/89_vwF(2).ppt" target="_blank">"ФГОС ДО - ориентир. развития системы дошкольного образования в РФ"</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%92%D0%B8%D0%B4%D1%8B%20%D0%B4%D0%B5%D1%82%D1%81%D0%BA%D0%BE%D0%B9%20%D0%B4%D0%B5%D1%8F%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D0%B8.ppt" target="_blank">Виды детской деятельности</a></li>
                    <li><a href="https://edu.tatar.ru/upload/images/files/%D0%A1%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0%20%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%8B%20%D1%81%20%D1%80%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%D0%BC%D0%B8.ppt" target="_blank">Система работы с родителями</a></li>
                </ul>
            </div>
        </div>
        <div class="albums__items wp">
            <div class="albums__item">
                <div class="album__preview">
                    <img src="{{ asset('img/albums/album1.png') }}" alt="">
                </div>
            </div>
            <div class="albums__item">
                <div class="album__preview">
                    <img src="{{ asset('img/albums/album2.png') }}" alt="">
                </div>
            </div>
            <div class="albums__item">
                <div class="album__preview">
                    <img src="{{ asset('img/albums/album3.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection