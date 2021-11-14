<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#tabs-notes">Notes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#tabs-activities">Activities</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#tabs-files">Files</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade show active" id="tabs-notes">
        <div class="card-body pl-0 pr-0">
            @livewire('notes', [
            'model' => $model
            ])
        </div>
    </div>
    <div class="tab-pane fade" id="tabs-activities">
        <div class="card-body pl-0 pr-0">
            {{--<h6 class="text-uppercase mt-4">{{ ucfirst(__('laravel-crm::lang.activities')) }}</h6>
            <hr />--}}
            ...
        </div>
    </div>
    <div class="tab-pane fade" id="tabs-files">
        <div class="card-body pl-0 pr-0">
            {{--<h6 class="text-uppercase mt-4">{{ ucfirst(__('laravel-crm::lang.files')) }}</h6>
            <hr />--}}
            ...
        </div>
    </div>
</div>