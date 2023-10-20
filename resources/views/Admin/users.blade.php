@extends('layouts.dashboardAdmin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Liste des Utilisateurs</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <div class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                <span class="material-symbols-outlined">
                                    more_horiz
                                </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="users-list table table-striped mt-4">
                                <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="text-center">
                                            <input type="checkbox" class="form-check-input">
                                        </div>
                                    </th>
                                    <th scope="col">Photo de Profil</th>
                                    <th scope="col">Nom d'Utilisateur</th>
                                    <th scope="col">Adresse Email</th>
                                    <th scope="col">Rôle</th>
                                    <th scope="col">Éditer le Rôle</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                <input type="checkbox" class="form-check-input">
                                            </div>
                                        </td>
                                        <td>
                                            <img class="rounded-circle img-fluid avatar-40 me-2" src="{{ asset('storage/' . $user->photo) }}"  alt="profile" loading="lazy">
                                        </td>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            {{ $user->role }}
                                        </td>
                                        <td>
                                            <form action="{{ route('updateRole', ['userId' => $user->id]) }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <div class="form-group">
                                                    <label for="role">Role:</label>
                                                    <select id="roleDropdown" name="role" class="form-control">
                                                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update Role</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


<script>
    $(document).ready(function () {
        $('#roleDropdown').on('change', function () {
            var selectedRole = $(this).val();

            $.ajax({
                type: 'POST',
                url: '{{ route('updateRole', ['userId' => $user->id]) }}', // Use 'userId' instead of 'id'
                data: {
                    '_token': '{{ csrf_token() }}',
                    'role': selectedRole,
                },
                success: function (data) {
                    // Handle success (e.g., show a success message)
                    alert('Role updated successfully.');
                },
                error: function (error) {
                    // Handle errors (e.g., show an error message)
                    alert('Role update failed.');
                }
            });
        });
    });
</script>
