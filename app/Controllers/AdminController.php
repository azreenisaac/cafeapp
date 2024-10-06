<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index(): string
    {
        // Declare data array
        $data['title'] = "My Dashboard";

        // Pass the data array to the view
        return view('admin/index', $data);
    }

    public function adminlist()
    {
        // Declare data array
        $data['title'] = "Admin List";

        // Pass the data array to the view
        return view('admin/admin-list', $data);
    }

    public function add_admin()
    {
        // Declare data array
        $data['title'] = "Register New Admin";

        // Pass the data array to the view
        return view('admin/_layouts/add_admin', $data);
    }

    public function edit_admin()
    {
        // Declare data array
        $data['title'] = "Edit Admin";

        // Pass the data array to the view
        return view('admin/_layouts/edit_admin', $data);
    }

    public function stafflist()
    {
        // Declare data array
        $data['title'] = "Cafe Staff List";

        // Pass the data array to the view
        return view('admin/staff-list', $data);
    }

    public function add_staff()
    {
        // Declare data array
        $data['title'] = "Register New Cafe Staff";

        // Pass the data array to the view
        return view('admin/_layouts/add_staff', $data);
    }

    public function edit_staff()
    {
        // Declare data array
        $data['title'] = "Edit Cafe Staff";

        // Pass the data array to the view
        return view('admin/_layouts/edit_staff', $data);
    }

    public function studentlist()
    {
        // Declare data array
        $data['title'] = "Student List";

        // Pass the data array to the view
        return view('admin/student-list', $data);
    }

    public function add_student()
    {
        // Declare data array
        $data['title'] = "Register New Student";

        // Pass the data array to the view
        return view('admin/_layouts/add_student', $data);
    }

    public function edit_student()
    {
        // Declare data array
        $data['title'] = "Edit Student";

        // Pass the data array to the view
        return view('admin/_layouts/edit_student', $data);
    }

    public function cafelist()
    {
        // Declare data array
        $data['title'] = "Cafe List";

        // Pass the data array to the view
        return view('admin/cafe-list', $data);
    }

    public function add_cafe()
    {
        // Declare data array
        $data['title'] = "Register New Cafe";

        // Pass the data array to the view
        return view('admin/_layouts/add_cafe', $data);
    }

    public function edit_cafe()
    {
        // Declare data array
        $data['title'] = "Edit Cafe";

        // Pass the data array to the view
        return view('admin/_layouts/edit_cafe', $data);
    }

    public function performance()
    {
        // Declare data array
        $data['title'] = "Cafe Performance";

        // Pass the data array to the view
        return view('admin/cafe-performance', $data);
    }

    public function customerreviews()
    {
        // Declare data array
        $data['title'] = "Customer Reviews";

        // Pass the data array to the view
        return view('admin/customer-reviews', $data);
    }

    public function reviews()
    {
        // Declare data array
        $data['title'] = "Customer Reviews";

        // Pass the data array to the view
        return view('admin/_layouts/reviews', $data);
    }

    public function supportticket()
    {
        // Declare data array
        $data['title'] = "Support Ticket";

        // Pass the data array to the view
        return view('admin/support-ticket', $data);
    }
}
