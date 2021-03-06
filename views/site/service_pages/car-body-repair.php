<?php
/**
 * @var \yii\web\View $this
 * @var \app\models\ServiceItems $model
 */
?>

<div class="main-content">
    <div class="decor-h1">
        <h1><?= $model->seo_h1;?></h1>
    </div>
    <p>СТО Тайм Авто предлагает профессиональный кузовной ремонт автомобиля. Мы работаем с любым видом повреждений любых марок машин.</p>

    <?php if ($model->hasPrice()):?>
        <h2>Цена на покраску автомобиля</h2>
        <p>Цены на кузовной ремонт и покраску автомобиля в нашем СТО одни из самых демократичных в Киеве.</p>
        <?php echo \app\widgets\Price::widget(['model' => $model]);?>
    <?php endif;?>


    Выполняемые арматурные и кузовные работы, по детально:

    <ul>
        <li>бампер передний и задний;</li>
        <li>капот;</li>
        <li>крыло переднее и заднее;</li>
        <li>дверь передняя и задняя;</li>
        <li>порог;</li>
        <li>крышка багажника;</li>
        <li>арка;</li>
        <li>крыша.</li>
    </ul>

    <p>Качественная покраска автомобиля - та услуга, которой мы действительно гордимся. Наше СТО имеет современные камеры Enzo и Yoki Star, оснащенные профессиональным оборудованием Festool, Sata, Saico, Blowtherm, Car-O-Liner. Мы используем материалы ведущих мировых производителей – CarSystem, 3M, DuPont, а наши специалисты имеют за спиной многолетний опыт выполнения данных работ.</p>

    <p>Помимо всего прочего, в перечень наших услуг входят:</p>

    <ul>
        <li>замена лобовых стекол (автостекла в наличии и под заказ) - цена работ от 1 000 грн;</li>
        <li>ремонт пластиковых деталей специальными материалами.</li>
    </ul>

    <h2>Виды кузовного ремонта</h2>

    <p>Кузовной ремонт автомобиля предполагает восстановление различных его элементов при наличии дефектов или повреждений, как внешних, так и внутренних.</p>

    <p>Необходимость в нем может возникнуть, если ваша машина побывала в ДТП и была нарушена геометрия. Опасность таких повреждений в том, что в месте удара в дальнейшем может распространяться коррозия. Другой причиной является коррозия элементов, которая происходит при длительной эксплуатации машины в агрессивных условиях и недостаточных уход за лакокрасочной поверхностью.</p>

    <p>Автосервис <?= Yii::$app->params['appName'];?> предлагает следующие виды ремонта и покраски автомобиля:</p>

    <ul>
        <li>локальная. Данный вид используется при небольших повреждениях отдельных элементов. Производится быстро, сравнительно недорог;</li>
        <li>полная. Нужна при серьезных повреждениях после крупного ДТП или при поражении ржавчиной всего кузова. Сложная и функциональная процедура, требующая много времени и профессионального подхода;</li>
        <li>беспокрасочный ремонт. Устранение небольших вмятин вакуумным методом или методом электровыравнивания.</li>
    </ul>

    <h3>Этапы покраски автомобиля</h3>

    <p>В любом случае кузовной ремонт и покраска автомобиля выполняются в несколько этапов:</p>

    <ol>
        <li>Оценка повреждений. Необходимо провести диагностику всех элементов и узлов. На этом этапе мастера определяют, какие повреждения получила машина, какие работы должны быть произведены и их срок;</li>
        <li>Непосредственно работы. Сюда могут входить работы по воссозданию изначальной геометрии авто (при сильной деформации), рихтовке и восстановлению отдельных деталей. Элементы, которые не подлежат ремонту, заменяются новыми;</li>
        <li>Подготовка к лакокрасочным работам. На этом этапе удаляется старая краска, поверхность окрашиваемых деталей обрабатывается шпатлевкой и загрунтовывается (что часто является противокоррозийной обработкой);</li>
        <li>Покраска и полировка. Подбор цвета производится с использованием специального оборудования, чтобы максимально приблизить его к основному цвету. Окрашивание поврежденного участка дает возможность полностью обновить его до прежнего вида. Заканчивается работа по восстановлению полировкой поверхности.</li>
    </ol>

    <p>В результате у машины полностью восстанавливаются характеристики управляемости и внешний вид.</p>

    <h3>Преимущества СТО Тайм Авто</h3>

    <p>Кузовной ремонт автомобиля в СТО Тайм Авто имеет ряд преимуществ:</p>

    <ul>
        <li>сертифицированные специалисты;</li>
        <li>100% попадание в цвет;</li>
        <li>высокий уровень качества;</li>
        <li>оперативность выполнения;</li>
        <li>гарантия результата;</li>
        <li>доступные цены.</li>
    </ul>

    <p>Приезжайте к нам и будьте уверены, что Ваша машина попадет в нужные руки. На покраску крыла, капота, порогов и стойки действуют специальные скидки!</p>

    <h3>Записаться на кузовной ремонт в СТО Тайм Авто</h3>

    <p>Для заказа услуги по покраске автомобиля по ценам ниже городских звоните по телефонам удобного для Вас автосервиса:</p>

    <ul>
        <li>Тайм Авто на Академгородке +38 (050) 888-26-65</li>
    </ul>

    <p>либо записывайтесь на проведение работ он-лайн через форму <a href="#" onclick="featureInProgress()">запись на ремонт</a>.</p>

    <hr>
    <p>Уважаемые посетили, СТО Тайм Авто помимо услуг по ремонту и обслуживанию автомобилей также предлагает все виды оригинальных и неоригинальных запчастей.</p>

    <div class="row second-gallery">

    </div>

</div>
