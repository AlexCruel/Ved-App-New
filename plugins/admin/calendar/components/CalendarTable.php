<?php namespace Admin\Calendar\Components;

use Admin\Calendar\Models\Event;
use Cms\Classes\ComponentBase;

/**
 * CalendarTable Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class CalendarTable extends ComponentBase
{
    public function componentDetails(): array
    {
        return [
            'name' => 'Календарь событий',
            'description' => 'Отображает календарь в виде таблицы'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties(): array
    {
        return [];
    }

    public function onRun(): void
    {
        $this->page['month'] = date('m');
        $this->page['monthRU'] = $this->changeLangMonth($this->page['month']);
        $this->page['year'] = date('Y');
        $this->page['nextYear'] = date('Y', strtotime('+1 year'));

        $this->page['events'] = $this->getEvents($this->page['month'], $this->page['year']);
        $this->page['eventsCount'] = count($this->page['events']);
    }

    public function onSelectMonthYear(): array
    {
        $this->page['month'] = input('selectMonth');
        $this->page['monthRU'] = $this->changeLangMonth($this->page['month']);
        $this->page['year'] = input('selectYear');

        $this->page['events'] = $this->getEvents($this->page['month'], $this->page['year']);
        $this->page['eventsCount'] = count($this->page['events']);

        return ['#month' => $this->page['monthRU'], '#year' => $this->page['year']];
    }

    public function getEvents($month, $year): \Illuminate\Database\Eloquent\Collection|array
    {
        $events = Event::query()
            ->with('tag')
            ->whereYear('date_reserv', '=', $year)
            ->whereMonth('date_reserv', '=', $month)
            ->get();

        // change date format
        foreach ($events as $event)
        {
            $event->date_reserv = date("d.m.y H:i", strtotime($event->date_reserv));
        }

        return $events;
    }

    public function changeLangMonth($month): string
    {
        switch ($month)
        {
            case '1':
                return 'Январь';
            case '2':
                return 'Февраль';
            case '3':
                return 'Март';
            case '4':
                return 'Апрель';
            case '5':
                return 'Май';
            case '6':
                return 'Июнь';
            case '7':
                return 'Июль';
            case '8':
                return 'Август';
            case '9':
                return 'Сентябрь';
            case '10':
                return 'Октябрь';
            case '11':
                return 'Ноябрь';
            case '12':
                return 'Декабрь';
            default:
                return 'Январь';
        }
    }
}
