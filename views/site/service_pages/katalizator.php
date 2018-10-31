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
    <p><?= Yii::$app->params['appName'];?> профессионально занимается ремонтом и обслуживанием выхлопной системы автомобиля. Наш
        автосервис на высоком профессиональном уровне выполняет полный спектр работ, связанных с обслуживанием
        системы выхлопных газов любых марок и моделей автомобилей, в том числе работ по замене катализатора.</p>

    <p>Катализатор – это элемент, который очищает отработанные газы от посторонних примесей.</p>
    <p>При загрязнении или выходе из строя этого узла восстановить его работоспособность чрезвычайно трудно.
        Решить данную проблему можно двумя способами: приобрести новый катализатор и установить на место старого
        либо заменить его пламегасителем, обратившись к нашим специалистам</p>

    <h2>Цены на услуги по ремонту выхлопной системы</h2>

    <?php if ($model->hasPrice()):?>
        <?php echo \app\widgets\Price::widget(['model' => $model]);?>
    <?php endif;?>

    <h3>Самые распространенные неисправности, связанные с выхлопной системой автомобиля:</h3>
    <ul>
        <li>Машина начинаетнет с трудом набирать скорость.</li>
        <li>Горит лампочка Check Engine.</li>
        <li>Повышенный расход топлива.</li>
        <li>ДВС не заводится, или заводится, но, после старта и непродолжительной работы, глохнет.</li>
    </ul>

    <h3>Причины, которые моглди привести к выходу из строя катализатора:</h3>
    <ul>
        <li>Использование низкокачественного топлива.</li>
        <li>Плохой (неоригинальный) катализатор.</li>
        <li>Проблемы в работе двигателя.</li>
        <li>Поездки по плохим дорогам (механические повреждения).</li>
    </ul>


    <h3>В число преимуществ замены катализатора на пламегаситель входят следующие факторы:</h3>
    <ul>
        <li>Уменьшение затрат. Расходы на монтаж пламегасителя практически на порядок меньше.</li>
        <li>Использование дешевого горючего. После переделки можно без опаски заливать в бак бензин АИ-92, поскольку из автомашины удален дорогой фильтр. Это – дополнительная возможность экономии.</li>
        <li>Увеличение мощности. Известно, что мощность двигателя вследствие монтажа катализатора снижается до 7%. Это обусловлено тем, что катализатор состоит из большого количества сот, которые препятствуют выделению отработанных газов. Устранение катализатора и установка на его место пламегасителя обеспечивает почти прямой выход газов, так что потеря мощности отсутствует.</li>
        <li>Мотор работает без сбоев. Распространено мнение, что замена катализатора на пламегаситель ставит двигатель под удар. В действительности это не так. После удаления катализатора функционирование мотора облегчается. Сбои могут возникать вследствие некорректной прошивки ЭБУ. Однако при правильном выполнении этой работы, которую проводят наши специалисты, такой проблемы не возникает.</li>
    </ul>
    <h3>Наш автосервис проводит следующие работы:</h3>

    <ul>
        <li>замена катализатора на оригинальный;</li>
        <li>замена катализатора на пламегаситель;</li>
        <li>перепрошивка ЭБУ;</li>
        <li>любые виды работ по сварке, рихтовке и замене вышедших из строя частей выхлопной системы автомобиля</li>
    </ul>

    <p>Для заказа услуги звоните по телефону автосервиса: Тайм Авто на Академгородке <?= $this->context->getRandomPhone();?> либо записывайтесь на проведение работ он-лайн через форму <a href="#" onclick="featureInProgress();">запись на ремонт</a>.</p>

    <p>Гарантия на все виды работ!</p>

    <hr>
</div>
