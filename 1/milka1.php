<?php
$text = "Private cloud is a computing model that uses infrastructure dedicated to your organization. A private cloud shares many of the characteristics of public cloud computing including resource pooling, self-service, elasticity, and metered services delivered in a standardized manner with the additional control and customization available from dedicated resources.
The only fundamental difference between a private cloud and a public cloud is that a public cloud provides cloud resources to multiple organizations while the private cloud hosts resources for a single organization. However, a single organization may have multiple business units and divisions which can lend itself to being multi-tenant in nature. In these circumstances, private cloud shares many of the security and isolation requirements of public cloud.
While virtualization is an important technological enabler of private cloud, the key differentiator is the continued abstraction of computing resources from the infrastructure and the machines (virtual or otherwise) used to deliver those resources. Only by delivering this abstraction can you achieve the benefits of cloud computing—including improved agility and responsiveness, reduced total cost of ownership (TCO), and increased business alignment and focus. Most importantly, a private cloud promises to exceed the cost effectiveness of a virtualized infrastructure through higher workload density and greater resource utilization.
";
$textShevchenko = "Мені тринадцятий минало.
Я пас ягнята за селом.
Чи то так сонечко сіяло,
Чи так мені чого було?
Мені так любо, любо стало,
Неначе в Бога......
Уже прокликали до паю,
А я собі у бур’яні
Молюся Богу... І не знаю,
Чого маленькому мені
Тойді так приязно молилось,
Чого так весело було.
Господнє небо, і село,
Ягня, здається, веселилось!
І сонце гріло, не пекло!
Та недовго сонце гріло,
Недовго молилось...
Запекло, почервоніло
І рай запалило.
Мов прокинувся, дивлюся:
Село почорніло,
Боже небо голубеє
І те помарніло.
Поглянув я на ягнята —
Не мої ягнята!
Обернувся я на хати —
Нема в мене хати!
Не дав мені Бог нічого!..
І хлинули сльози,
Тяжкі сльози!.. А дівчина
При самій дорозі
Недалеко коло мене
Плоскінь вибирала,
Та й почула, що я плачу.
Прийшла, привітала,
Утирала мої сльози
І поцілувала...
Неначе сонце засіяло,
Неначе все на світі стало
Моє... лани, гаї, сади!..
І ми, жартуючи, погнали
Чужі ягнята до води.
Бридня!.. А й досі, як згадаю,
То серце плаче та болить,
Чому Господь не дав дожить
Малого віку у тім раю.
Умер би, орючи на ниві,
Нічого б на світі не знав.
Не був би в світі юродивим.
Людей і [Бога] не прокляв!
";
function rahunok($text) {
    $count = 'Number of words: '.count(explode(" ", $text)).'<br>'.'Number of Sentence: '.count(explode(".", $text));
    return $count;
}
echo rahunok($text);
echo '<br>'.rahunok($textShevchenko);