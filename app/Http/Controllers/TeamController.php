<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function team()
    {
        return view('back.dashboard.admin.pages.ourTeam.addmember');
    }

    public function teamshow()
    {
        $data = Team::get();

        return view('back.dashboard.admin.pages.ourTeam.all-member', ['share' => $data]);
    }

    public function teamstore(Request $req)
    {
        if (!is_dir(public_path('Admin/img/ourteam'))) {
            mkdir(public_path('Admin/img/ourteam'), 0777, true);
        }

        $imagePath = null;

        if ($req->img) {
            $image = $req->img;
            $name = $image->getClientOriginalName();
            $imageName = time() . "_" . $name;
            $imagePath = 'Admin/img/ourteam/' . $imageName;

            $image->move(public_path('Admin/img/ourteam'), $imageName);
        }

        $data = [
            'img' => $imagePath,
            'fullname' => $req->fullname,
            'jobtitle' => $req->jobtitle,
            'x' => $req->x,
            'facebook' => $req->facebook,
            'linkdin' => $req->linkdin,
        ];

        Team::create($data);
        return redirect()->route('allmember');
    }

    public function edit_member($id) // Accepting the member ID
    {
        $member = Team::findOrFail($id); // Retrieve the member details
       

        return view('back.dashboard.admin.pages.ourTeam.edit', compact('member')); // Pass the member data to the view
    }

    public function update_member(Request $req, $id) // Method to handle the update
    {
        $member = Team::findOrFail($id); // Find the member by ID

        if ($req->hasFile('img')) {
            // Handle the image upload if a new image is uploaded
            if (!is_dir(public_path('Admin/img/ourteam'))) {
                mkdir(public_path('Admin/img/ourteam'), 0777, true);
            }

            // Delete the old image if it exists
            if ($member->img && file_exists(public_path($member->img))) {
                unlink(public_path($member->img));
            }

            // Upload the new image
            $image = $req->img;
            $name = $image->getClientOriginalName();
            $imageName = time() . "_" . $name;
            $imagePath = 'Admin/img/ourteam/' . $imageName;

            $image->move(public_path('Admin/img/ourteam'), $imageName);
            $member->img = $imagePath; // Update image path in the member data
        }

        // Update the member's other details
        $member->fullname = $req->fullname;
        $member->jobtitle = $req->jobtitle;
        $member->x = $req->x;
        $member->facebook = $req->facebook;
        $member->linkdin = $req->linkdin;
        $member->save(); // Save the updated member

        return redirect()->route('allmember'); // Redirect to the all members page
    }
    public function delete_member($id)
    {
        // Find the member by ID
        $member = Team::findOrFail($id);

        // Check if the image exists and delete it from the storage
        if ($member->img && file_exists(public_path($member->img))) {
            unlink(public_path($member->img));
        }

        // Delete the member from the database
        $member->delete();

        // Redirect back to the all members page with a success message
        return redirect()->route('allmember')->with('success', 'Member deleted successfully.');
    }

}
