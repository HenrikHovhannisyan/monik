@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Faqs List' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Faqs List</h2>
            <a class="btn btn-success" href="{{ route('faqs.create') }}">
                <i class="fa-solid fa-plus"></i>
                New Faq
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Status</th>
                    <th scope="col">Question AM</th>
                    <th scope="col">Answer AM</th>
                    <th width="280px">{{ 'Action' }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($faqs as $faq)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>
                            @if($faq->status)
                                <span class="text-success">Active</span>
                            @else
                                <span class="text-danger">Inactive</span>
                            @endif
                        </td>
                        <td>{!! html_entity_decode($faq->question_am) !!}</td>
                        <td>{!! html_entity_decode($faq->answer_am) !!}</td>
                        <td>
                            <form action="{{ route('faqs.destroy',$faq->id) }}" method="POST">
                                <a class="btn btn-outline-success btn-sm m-1"
                                   href="{{ route('faqs.show',$faq->id) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm m-1"
                                   href="{{ route('faqs.edit',$faq->id) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm m-1">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {!! $faqs->links('vendor.pagination.bootstrap-4') !!}
    </div>
@endsection
