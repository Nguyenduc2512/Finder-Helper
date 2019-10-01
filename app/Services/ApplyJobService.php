<?php

namespace App\Services;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserApply;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

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

        return redirect()->route('user.profile');
    }

    public function userApply()
    {
        if (Auth::user()) {
            $userApply = UserApply::where('user_id', Auth::user()->id)->get();

            return $userApply;
        }
    }

    public function cancelApply($id)
    {
        $cancel = $this->userApply()->where('post_id', $id)->first();
        if ($cancel) {
            return $cancel->delete();
        }
    }

    public function acceptUser(Request $request, $id)
    {
        $status = Config::get('helper.post_type_confirm');
        $accept = UserApply::find($id);

        $data = [
          'status'  => $status,
        ];

        $accept->fill($data);
        return $accept->save();

    }

    public function declineUser(Request $request, $id)
    {
        $status = Config::get('helper.post_type_unSuccess');
        $decline = UserApply::find($id);

        $data = [
            'status'     => $status,
        ];

        $decline->fill($data);
        return $decline->save();
    }

    public function countAmount($id)
    {
        $status = Config::get('helper.post_type_confirm');
        $userApplies = UserApply::where('post_id', $id)
                                ->where('status', $status)->count();

        return $userApplies;
    }

    public function ownerSuccess($id)
    {
        $userApply = UserApply::find($id);
        $userApply = $userApply->load('user');
        $userApply = $userApply->load('post');

        $a = $userApply->user['coin'];
        $b = $userApply->post['price'];
        $c = $a - $b;

        $user = User::find(Auth::user()->id);
        $data = [
            'coin' => $c,
        ];

        $user->update($data);

        $status = Config::get('helper.post_type_confirm');
        $userPosts = UserApply::where('post_id', $id)
                              ->update(['owner_post_status' => $status]);

    }

    public function getUserApplyById($id)
    {
        $status = UserApply::where('user_id', Auth::id())
                           ->where('post_id', $id)->first();


    }

    public function helperConfirm($id)
    {
        $status = Config::get('helper.done');
        $userApplyStatus = UserApply::find($id);
        $userApplyStatus = $userApplyStatus->load('user');
        $userApplyStatus = $userApplyStatus->load('post');

        $a = $userApplyStatus->user['coin'];
        $b = $userApplyStatus->post['price'];
        $c = $a + $b;

        $user = User::find(Auth::user()->id);
        $data = [
            'coin' => $c,
        ];

        $user->update($data);

        $userApplyStatus->user_apply_status = $status;
        $userApplyStatus->save();

        return $userApplyStatus;
    }

}
