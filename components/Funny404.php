<?php namespace SGDInstitute\Funny404\Components;

use Lang;
use Cms\Classes\ComponentBase;
use SGDInstitute\Funny404\Models\Message;
use SGDInstitute\Funny404\Models\Link;
use SystemException;

class Funny404 extends ComponentBase
{
    /**
     * A model instance to display
     * @var \October\Rain\Database\Model
     */
    public $message = null;

    /**
     * Message to display if the record is not found.
     * @var string
     */
    public $notFoundMessage;


    public function componentDetails()
    {
        return [
            'name'        => 'Funny 404',
            'description' => 'Displays random funny message for user.',
        ];
    }

    //
    // Properties
    //

    public function defineProperties()
    {
        return [
            'notFoundMessage' => [
                'title'             => 'Not found message',
                'description'       => 'Message used to display if the record is not found.',
                'default'           => Lang::get('Record not found.'),
                'type'              => 'string',
                'showExternalParam' => false,
            ],
        ];
    }

    //
    // Rendering and processing
    //

    public function onRun()
    {
        $this->prepareVars();

        $this->message = $this->page['message'] = $this->loadRecord();
    }

    protected function prepareVars()
    {
        $this->notFoundMessage = $this->page['notFoundMessage'] = Lang::get($this->property('notFoundMessage'));
    }

    protected function loadRecord()
    {
//        dd(Message::all()->random(1));
        return Message::all()->random(1);
    }
}
