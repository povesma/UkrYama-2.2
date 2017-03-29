<p>Доброго дня!</p>
<p>Скарга на негаразд на дорозі, відзначений на УкрЯмі, було відправлено та доставлено <?php print (Y::dateFromTime($deliv->ddate))?> 
до <strong><?php print ($request->auth_ua->name)?>.</strong> Дякуємо за вашу небайдужість до стану доріг!
</p>
<p><strong>Посилання на дефект:</strong> <?php print(Yii::app()->createAbsoluteUrl($model->ID)); ?></p>
<p><strong>Що зробити зараз:</strong> Протягом 30 днів посадова особа, що розглядає скаргу, має надіслати відповідь. Якщо цього не відбудеться,
ми пропонуємо надістати ще одну скаргу у вищу інстанцію або звернутися до суду. Зазвичай це працює.<br>
У відповіді можуть повідомити, що дорожній дефект усунено, або ж ні з якихось причин. Легальних причин не усувати дефект (окрім надзвичайних подій) 
немає, тому у такому випадку потрібна буде ще одна скарга або звернення до суду.

</p>
<br>
<p><strong>УкрЯма допоможе з подальшими кроками</strong></p>

<p>Поки на надішла відповідь, регулярно (за можливістю) перевіряйте стан дороги: ремонтні роботи можуть проходити з явними порушеннями. 
Якщо ви є свідком ремонтних робіт - сфотографуйте, це може бути важливим доказом для фінінспекції у подальшому. Основна причина зруйнованих доріг
не в тому, що їх не ремонтують, а ремонтують з порушеннями, неякісно.
</p>
<br>
<p><strong>Поділіться з друзями</strong></p>
<p>Розкажіть друзям про роботу, яку ви робите та запропонуйте їм долучитися, відправити ту саму скаргу, що й ви:
<?php print(Yii::app()->createAbsoluteUrl("payments/add?holeid=".$model->ID)); ?>.  Це підвищить шанси на належний розгляд.</p>

<br>
<p>Якщо у вас є питання - можете задати їх просто у відповіді на цей лист. Листування може бути опубліковано лише за вашої згоди.</p>

<p>З повагою,<br> 
команда УкрЯми </p>
