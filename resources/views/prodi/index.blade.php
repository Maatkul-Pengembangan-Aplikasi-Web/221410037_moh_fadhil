<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Program Studi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="ml-auto d-flex">
                            <a href="#" role="button" class="btn btn-primary mr-2 d-flex align-items-center gap-1">
                                <i class="bi bi-plus"></i>
                                Tambah Program Studi
                            </a>
                            <form action="" method="GET" class="d-flex">
                                <input type="text" name="search" class="form-control" placeholder="Pencarian">
                                <button class="btn btn-primary ml-2" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama Program Studi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-flex gap-2">
                                    <a href="#" class="btn btn-info d-flex gap-1 font-bold align-items-center">
                                        <i class="bi bi-pencil-square"></i>
                                        <span>Edit</span>
                                    </a>
                                    <a href="#" class="btn btn-danger d-flex gap-1 font-bold align-items-center">
                                        <i class="bi bi-trash"></i>
                                        <span>Hapus</span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>