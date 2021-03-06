<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companyController extends Controller
{
    public function about()
    {
        return view('company.tentang');
    }
    public function blog()
    {
        return view('company.blog');
    }
    public function event()
    {
        return view('company.event');
    }
    public function requestevent()
    {
        return view('company.request');
    }
    public function postevent(Request $request)
    {
        $post = new \App\eventDB;
        $post->nama_pic = $request->nama_pic;
        $post->email_pic = $request->email_pic;
        $post->nohp_pic = $request->nohp_pic;
        $post->nama_event = $request->nama_event;
        $post->deskripsi_event = $request->deskripsi_event;
        $post->kategori_event = $request->kategori_event;
        $post->tglevent = $request->tglevent;
        $post->waktu_event = $request->waktu_event;
        $post->provinsi = $request->provinsi;
        $post->kota = $request->kota;
        $post->tempat_event = $request->tempat_event;
        $post->speaker = $request->speaker;
        $post->harga_event = $request->harga_event;
        $post->optional_info = $request->optional_info;
        $post->logIP = $request->getClientIp();
        $post->tgl_berakhirevent = '-';
        $post->link_daftar = '-';
        $post->status = 'unapproved';
        $post->created_by = $request->getClientIp();
        $post->updated_by = $request->getClientIp();

        if ($request->hasFile('picevent')) {
            $request->file('picevent')->move('eventstorage/img/', $request->file('picevent')->getClientOriginalName());
            $post->picevent = $request->file('picevent')->getClientOriginalName();
            $post->save();
            // dd($post);
        }

        return back()->with('sukses', 'Dan akan segera dihubungi kembali melalui email/telepon untuk melakukan
                        konfirmasi kembali terhadap event tersebut.');
    }
    public function karir()
    {
        return view('company.karir');
    }
    public function hubungi()
    {
        return view('company.hubungi');
    }
    public function cerita()
    {
        return view('company.cerita');
    }
    public function kirimpesan(Request $request)
    {
        $post = new \App\messagesDB;
        $post->judul_messages = $request->options;
        $post->nama_lengkap = $request->nama_lengkap;
        $post->email = $request->email;
        $post->subject = $request->subject;
        $post->messages = $request->messages;
        $post->status = 'unread';

        $post->save();

        return back()->with('sukses', 'Dan akan segera dihubungi untuk melakukan
                        konfirmasi kembali terhadap event tersebut.');
    }
}
