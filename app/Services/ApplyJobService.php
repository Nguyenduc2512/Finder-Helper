<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\UserApply;
use Illuminate\Support\Facades\Auth;

class ApplyJobService
{

    public function applyJob(Request $request)
    {
        $apply = new UserApply();
        $data = [
            'user_id'    => Auth::user()->id,
            'post_id'    => $request->post_id,
            'apply_time' => $request->apply_time,
            'status'     => $request->status,
        ];
        $apply->fill($data);
        $apply->save();

        return redirect()->route('user.profile')->with('errmsg', 'Ứng tuyển thành công');
    }
}
