<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StaffController extends BaseController
{
    public function index(): string
    {
        // Declare data array
        $data['title'] = "My Dashboard";

        // Pass the data array to the view
        return view('staff/index', $data);
    }

    public function aboutcafe()
    {
        // Declare data array
        $data['title'] = "About Cafe";

        // Pass the data array to the view
        return view('staff/about-cafe', $data);
    }

    public function stafflist()
    {
        // Declare data array
        $data['title'] = "Cafe Staff List";

        // Pass the data array to the view
        return view('staff/staff-list', $data);
    }

    public function cafemenu()
    {
        // Declare data array
        $data['title'] = "Cafe Menu";

        // Pass the data array to the view
        return view('staff/cafemenu', $data);
    }

    public function menucategory()
    {
        // Declare data array
        $data['title'] = "Cafe Menu Category";

        // Pass the data array to the view
        return view('staff/menu-category', $data);
    }

    public function custreviews()
    {
        // Declare data array
        $data['title'] = "Customer Reviews";

        // Pass the data array to the view
        return view('staff/customer-reviews', $data);
    }

    public function support_ticket()
    {
        // Declare data array
        $data['title'] = "Support Ticket";

        // Pass the data array to the view
        return view('staff/support-ticket', $data);
    }
}
