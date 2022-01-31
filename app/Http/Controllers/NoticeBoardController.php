<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoticeBoardRequest;
use App\Http\Requests\UpdateNoticeBoardRequest;
use App\Models\EmployeeNoticeBoard;
use App\Models\NoticeBoard;
use Illuminate\Support\Facades\DB;

class NoticeBoardController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Notice Board');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.notice_board.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Responseemployee_notice_board_notice_board
     */
    public function create()
    {
        return view('pages.notice_board.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNoticeBoardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoticeBoardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NoticeBoard  $noticeBoard
     * @return \Illuminate\Http\Response
     */
    public function show(NoticeBoard $noticeBoard)
    {
        $noticeBoard = $noticeBoard->id;

        return view('pages.notice_board.show', compact('noticeBoard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoticeBoard  $noticeBoard
     * @return \Illuminate\Http\Response
     */
    public function edit(NoticeBoard $noticeBoard)
    {
        $noticeBoard = $noticeBoard->id;

        return view('pages.notice_board.edit', compact('noticeBoard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNoticeBoardRequest  $request
     * @param  \App\Models\NoticeBoard  $noticeBoard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNoticeBoardRequest $request, NoticeBoard $noticeBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoticeBoard  $noticeBoard
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoticeBoard $noticeBoard)
    {
        //
    }
}
