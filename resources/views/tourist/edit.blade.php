@extends('tourist.create')
@section('editID',$item->id)
@section('title','edit your review')
@section('Edittitle',$item->title)
@section('Editplace',$item->place)
@section('Editcountry',$item->country)
@section('Editbody',$item->body)
@section('editMethod')
	{{method_field('PUT')}}
@endsection
