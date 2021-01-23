<?php

namespace App\Http\Controllers;

class favoriteController extends Controller
{
    /**
     * ユーザをお気に入りするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをお気に入りする
        \Auth::user()->like($id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * ユーザをアンお気に入りするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンお気に入りする
        \Auth::user()->unlike($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
