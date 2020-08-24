@extends('template')

@section('content')
    <!-- Title -->
    <div class="h4 text-primary font-weight-normal mb-5">
      Administrator Content Management
    </div>
    <!-- Title -->

    <!-- Content -->
    <div class="row d-flex">
      {{-- Card 1 --}}
      <div class="col-md-6 col-lg-4 pb-3">
        <x-card>
          <x-slot name="title">School Information</x-slot>
          <x-slot name="icon">icons/building_icon.svg</x-slot>
          <x-slot name="left_button">
            <button type="button" class="btn-sm btn btn-link p-0">View</button>
          </x-slot>
          <!-- Image Left -->
          <div class="col-lg-4 col-xl-3 col-md-4 col-sm-2 d-none d-sm-block pr-0">
            <div class="card custom-shadow p-0 border-0 custom-rounded">
                <div class="card-body d-flex justify-content-center align-items-center">
                <img src="{{ asset ('icons/earth_icon.svg') }}" alt="Earth Icon" class="img-responsive">
                </div>
            </div>
          </div>
          <!-- Image Left -->
  
          <!-- Right Side -->
          <div class="col-lg-8 col-xl-9 col-md-8 col-sm-10 pl-0 pr-1">
            <div class="col-12 text-truncate">
                <span class="font-weight-bold">SMA Santo nikolaus Lokon</span>
                <div class="small col-12 p-0 text-truncate">
                <span class="text-muted">Information: </span>
                <span class="text-danger font-italic">10 % Completed</span>
                </div>
                <!-- Progress Bar -->
                <div class="col-12 p-0">
                <div class="progress ch-7 rounded-pill">
                    <div class="progress-bar bg-danger" style="width: 10%"></div>
                </div>
                </div>
            </div>
            <div class="col-12 mt-3 d-flex justify-content-end">
                <button type="button" class="px-3 btn btn-sm rounded-pill btn-primary">
                Edit
                </button>
            </div>
          </div>
          <!-- Right Side -->
        </x-card>
      </div>

      {{-- Card 2 --}}
      <div class="col-md-6 col-lg-4 pb-3">
        <x-card>
          <x-slot name="title">Subject Enrollment</x-slot>
          <x-slot name="icon">icons/book_icon.svg</x-slot>
          <x-slot name="left_button">
            <button type="button" class="btn-sm btn btn-link p-0">View</button>
          </x-slot>
  
          <!-- Right Side -->
            <div class="col-12 text-truncate p-3">
                <div class="text-center text-muted h6">No Subject is enrolled at the moment</div>
            </div>
            <div class="col-12 mt-3 d-flex justify-content-between">
                <button type="button" class="px-3 btn btn-sm btn-link">
                  <i class="fa fa-eye"></i> View
                </button>
                <button type="button" class="px-3 btn btn-sm btn-success rounded-pill">
                  <i class="fa fa-plus"></i> Add Subject
                </button>
            </div>
          <!-- Right Side -->
        </x-card>
      </div>

      {{-- Card 3 --}}
      <div class="col-md-6 col-lg-4 pb-3">
        <x-card>
          <x-slot name="title">Class Management</x-slot>
          <x-slot name="icon">icons/structure_icon.svg</x-slot>
          <x-slot name="left_button">
            <button type="button" class="btn-sm btn btn-link p-0">View</button>
          </x-slot>
  
          <!-- Right Side -->
            <div class="col-12 text-truncate p-3">
                <div class="text-center text-muted h6">No Subject is enrolled at the moment</div>
            </div>
            <div class="col-12 mt-3 d-flex justify-content-between">
                <button type="button" class="px-3 btn btn-sm btn-link">
                  <i class="fa fa-eye"></i> View
                </button>
                <button type="button" class="px-3 btn btn-sm btn-success rounded-pill">
                  <i class="fa fa-plus"></i> Add Class
                </button>
            </div>
          <!-- Right Side -->
        </x-card>
      </div>

      {{-- Card 4 --}}
      <div class="col-md-6 col-lg-4 pb-3">
        <x-card>
          <x-slot name="title">Teacher Management</x-slot>
          <x-slot name="icon">icons/connection_icon.svg</x-slot>
          <x-slot name="left_button">
            <button type="button" class="btn-sm btn btn-link p-0">View</button>
          </x-slot>
  
          <!-- Right Side -->
            <div class="col-12 text-truncate p-3">
                <div class="text-center text-muted h6">No Subject is enrolled at the moment</div>
            </div>
            <div class="col-12 mt-3 d-flex justify-content-between">
                <button type="button" class="px-3 btn btn-sm btn-link">
                  <i class="fa fa-eye"></i> View
                </button>
                <div class="d-flex">
                  <button type="button" class="px-3 btn btn-sm btn-success rounded-pill mr-1">
                    <i class="fa fa-plus"></i> Add Teacher
                  </button>
                  <button type="button" class="px-3 btn btn-sm btn-primary rounded-pill">
                    <i class="fa fa-user-plus"></i> Invite
                  </button>
                </div>
            </div>
          <!-- Right Side -->
        </x-card>
      </div>

      {{-- Card 5 --}}
      <div class="col-md-6 col-lg-4 pb-3">
        <x-card>
          <x-slot name="title">Class Schedule</x-slot>
          <x-slot name="icon">icons/calendar_icon.svg</x-slot>
          <x-slot name="left_button">
            <button type="button" class="btn-sm btn btn-link p-0">View</button>
          </x-slot>
  
          <!-- Right Side -->
            <div class="col-12 text-truncate p-3">
                <div class="text-center text-muted h6">No Subject is enrolled at the moment</div>
            </div>
            <div class="col-12 mt-3 d-flex justify-content-between">
                <button type="button" class="px-3 btn btn-sm btn-link">
                  <i class="fa fa-eye"></i> View
                </button>
                <button type="button" class="px-3 btn btn-sm btn-success rounded-pill">
                  <i class="fa fa-plus"></i> Add Event
                </button>
            </div>
          <!-- Right Side -->
        </x-card>
      </div>

      {{-- Card 6 --}}
      <div class="col-md-6 col-lg-4 pb-3">
        <x-card>
          <x-slot name="title">School Event Management</x-slot>
          <x-slot name="icon">icons/speaker_icon.svg</x-slot>
          <x-slot name="left_button">
            <button type="button" class="btn-sm btn btn-link p-0">View</button>
          </x-slot>
  
          <!-- Right Side -->
            <div class="col-12 text-truncate p-3">
                <div class="text-center text-muted h6">No Subject is enrolled at the moment</div>
            </div>
            <div class="col-12 mt-3 d-flex justify-content-between">
                <button type="button" class="px-3 btn btn-sm btn-link">
                  <i class="fa fa-eye"></i> View
                </button>
                <button type="button" class="px-3 btn btn-sm btn-success rounded-pill">
                  <i class="fa fa-plus"></i> Add Event
                </button>
            </div>
          <!-- Right Side -->
        </x-card>
      </div>

      {{-- Card 7 --}}
      <div class="col-md-6 col-lg-4 pb-3">
        <x-card>
          <x-slot name="title">Tuition Management</x-slot>
          <x-slot name="icon">icons/bubble_icon.svg</x-slot>
          <x-slot name="left_button">
            <button type="button" class="btn-sm btn btn-link p-0">View</button>
          </x-slot>
  
          <!-- Right Side -->
            <div class="col-12 text-truncate p-3">
                <div class="text-center text-muted h6">No Subject is enrolled at the moment</div>
            </div>
            <div class="col-12 mt-3 d-flex justify-content-between">
                <button type="button" class="px-3 btn btn-sm btn-link">
                  <i class="fa fa-eye"></i> View
                </button>
                <button type="button" class="px-3 btn btn-sm btn-success rounded-pill">
                  <i class="fa fa-plus"></i> Add Event
                </button>
            </div>
          <!-- Right Side -->
        </x-card>
      </div>

    </div>
    <!-- Content -->
@endsection