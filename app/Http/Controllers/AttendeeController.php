<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    public function excel() {

        // Execute the query used to retrieve the data. In this example
        // we're joining hypothetical users and payments tables, retrieving
        // the payments table's primary key, the user's first and last name,
        // the user's e-mail address, the amount paid, and the payment
        // timestamp.

        // why isn't $attendees pink? and not sure that "Attendee" is the right thing, just imitating what the example had
        $attendees = Attendee::join('events', 'events.id', "=", 'attendees.event_id')
            ->select(
                'events.name',
                'attendees.name',
                'attendees.role',
                'attendees.county',
                'attendees.email')
            ->get();

        )
        /*$payments = Payment::join('users', 'users.id', '=', 'payments.id')
            ->select(
                'payments.id',
                \DB::raw("concat(users.first_name, ' ', users.last_name) as `name`"),
                'users.email',
                'payments.total',
                'payments.created_at')
            ->get();*/

        // Initialize the array which will be passed into the Excel
        // generator.

        $attendeesArray = [];
//        $paymentsArray = [];

        // Define the Excel spreadsheet headers

        $attendeesArray[] = ['event_name', 'attendee_name', 'role', 'county', 'email'];

//        $paymentsArray[] = ['id', 'customer','email','total','created_at'];

        // Convert each member of the returned collection into an array,
        // and append it to the payments array.

        foreach ($attendees as $attendee) {
            $attendeesArray [] = $attendee->toArray();
        }

        /*foreach ($payments as $payment) {
            $paymentsArray[] = $payment->toArray();
        }*/

        // Generate and return the spreadsheet

        //where did $invoicesArray come from?!!??

        Excel::create('attendees', function($excel) use (??) {
            $excel->setTitle('Attendees');
            $excel->setCreator('Laravel')->setCompany('UKU Food Connection');
            $excel->setDescription('event attendance file');

            $excel->sheet('sheet1', function($sheet) use ($attendeesArray) {
                $sheet->fromArray($attendeesArray, null, 'A1', false, false);
            });
        })->download('xlsx');

        /*Excel::create('payments', function($excel) use ($invoicesArray) {

            // Set the spreadsheet title, creator, and description
            $excel->setTitle('Payments');
            $excel->setCreator('Laravel')->setCompany('WJ Gilmore, LLC');
            $excel->setDescription('payments file');

            // Build the spreadsheet, passing in the payments array
            $excel->sheet('sheet1', function($sheet) use ($paymentsArray) {
                $sheet->fromArray($paymentsArray, null, 'A1', false, false);
            });

        })->download('xlsx');*/
    }
}
