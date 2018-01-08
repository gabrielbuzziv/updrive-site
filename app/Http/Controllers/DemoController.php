<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemoRequest;
use App\Notifications\DemoRequestedNotification;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DemoController extends Controller
{

    /**
     * PipeDrive API URL.
     *
     * @var string
     */
    private $api_url = 'https://updrive.pipedrive.com/v1';

    /**
     * PipeDrive API Token.
     *
     * @var string
     */
    private $api_token = 'a1b446e27687bd8b413deb51532c6fd518711816';

    /**
     * Request DEMO page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $title = 'Experimente já';

        return view('demo/index', compact('title'));
    }

    /**
     * Request Demo.
     *
     * @param DemoRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function request(DemoRequest $request)
    {
        // Add Organization
//        $organization = $this->sendRequest('organizations', ['name' => $request->get('company')]);
//        $organization = json_decode($organization);
//
//        // Add Person
//        $person = $this->sendRequest('persons', [
//            'name'   => $request->get('name'),
//            'email'  => $request->get('email'),
//            'phone'  => $request->get('phone'),
//            'org_id' => $organization->data->id,
//        ]);
//        $person = json_decode($person);
//
//        // Add Deal
//        $deal = $this->sendRequest('deals', [
//            'title'     => "Negócio {$request->get('company')}",
//            'org_id'    => $organization->data->id,
//            'person_id' => $person->data->id,
//            'stage_id'  => 10
//        ]);
//        $deal = json_decode($deal);
//
//        // Add Activity
//        $activity = $this->sendRequest('activities', [
//            'subject'  => 'Retornar Contato',
//            'done'     => 0,
//            'type'     => 'call',
//            'due_date' => Carbon::now()->format('Y-m-d'),
//            'due_time' => Carbon::now()->addMinutes(30)->format('H:i'),
//            'duration' => '00:15',
//            'deal_id'  => $deal->data->id,
//            'note'     => 'Solicitou teste do UP Drive através da landing page.'
//        ]);
//        $activity = json_decode($activity);
//
//        // Add note in organization
//        $note = $this->sendRequest('notes', [
//            'content'   => 'Teste solicitado através da landing page.',
//            'deal_id'   => $deal->data->id,
//            'org_id'    => $organization->data->id,
//            'person_id' => $person->data->id,
//        ]);
//        $note = json_decode($note);

        $user = User::first();
        $user->notify(new DemoRequestedNotification($deal->data->id));

        $title = 'Parabéns, você deu o primeiro passo.';

        return view('demo.success', compact('title'));
    }

    /**
     * CURL POST Request.
     *
     * @param $action
     * @param array $options
     * @return mixed
     */
    private function sendRequest($action, $options = [])
    {
        $ch = curl_init("{$this->api_url}/{$action}?api_token={$this->api_token}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $options);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}
