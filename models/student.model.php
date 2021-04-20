<?php if(!class_exists('Student')):
require('bio.model.php');

class Student {
    private string $name, $group, $labTitle;
    private int $labNum;
    private Bio $bio;

    public function __construct() {
        $this->name = "Виниченко А.А.";
        $this->group = "ИС/б-18-2-о";
        $this->labNum = 1;
        $this->labTitle = "Реализация собственной MVC-архитектуры";

        $this->bio = new Bio();
        $this->bio->addArticle('Общая информация', 'Я, Виниченко Андрей Андреевич, родился в 10.09.2000 в г. Ровеньки, Луганская область.');
        $this->bio->addArticle('Образование', 'В 2008 г. пошел в первый класс среднеобразовательной школы № 41. 
                                    Во время обучения в школе параллельно окончил курсы слесаря - моториста. В 2018 г. получил аттестат о среднем образовании. 
                                    На следующий год устроился слесарем по ремонту автомашин в производственном управлении транспорта Главташкентстроя.
							        С 2016 г. по 2018 г. проходил спецкурсы водителей на автобус с последующей стажировкой. 
							        После окончания курсов по 2018 г. работал водителем.');
        $this->bio->addArticle('Работа', 'С 2016 г. по 2018 г. работал разъездным фотографом.
							        С 2019 г. по 2020 г. в кооперативе ТЭД проработал мастером цеха.');
        $this->bio->addArticle('Текущее состояние', 'Следующим этапом в моей жизни был в 2020 г. переезд в город Севастополь, 
                                    где и проживаю вместе со своей семьей в настоящее время. Здесь и началась моя общественная деятельность. 
                                    На протяжении долгих лет принимал активное участие в обустройстве своего поселка. На данный момент добиваюсь 
                                    решения одной из важных проблем поселка Школьное – развязки удобных подъездных путей в населенный пункт. 
                                    Также проявляю большую инициативу в корректировке проекта автомобильной дороги Харьков – Симферополь – Севастополь 
                                    на территории п. Школьное, благоприятного для жителей населенного пункта.
							        Неженат, детей нет. Беспартийный; судимости не имеется. Проживаю по адресу: г. Севастополь, Нахимовский район, 
							        ул. Одинцова, д. 5, кв. 12.');
    }

    public function getName(): string {
        return $this->name;
    }

    public function getBio(): Bio {
        return $this->bio;
    }

    public function getGroup(): string {
        return $this->group;
    }

    public function getLabTitle(): string {
        return $this->labTitle;
    }

    public function getLabNum(): int {
        return $this->labNum;
    }
}

endif;
