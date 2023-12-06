@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-dark">Users</h1>
</div>
<table class="table text-dark">
    <thead>
      <tr>
        <th>#</th>
        <th>Username</th>
        <th>Role</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user as $item)
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $item->username }}</td>
            <td>{{ $item->role }}</td>
            @if ($item->status == 'verified')
            <td><span class="badge text-bg-success">Verified</span></td>
            @endif
            @if ($item->status == 'pending')
            <td><span class="badge text-bg-warning">Pending</span></td>
            @endif
            @if ($item->status == 'blocked')
            <td><span class="badge text-bg-danger">Blocked</span></td>
            @endif
            <td>
             @if ($item->role != 'SA')
             @if ($item->status != 'verified')
             <form action="{{ route('change-status', $item->id) }}" method="POST" class="d-inline">
                 @csrf
                    <button type="submit" class="btn btn-success">Verify</button>
                </form>
             @endif
             
             <a href="{{ route('user-show', $item->id) }}" class="btn btn-warning">Details</a>
             @if ($item->status != 'blocked')
             <form action="{{ route('change-status', $item->id) }}" method="POST" class="d-inline">
                 @csrf
                    <button type="submit" class="btn btn-danger">Block</button>
                </form>
             @endif

             @else
             {{-- null --}}
             @endif 
                
            </td>
          </tr>
        @endforeach
    
    </tbody>
  </table>
@endsection