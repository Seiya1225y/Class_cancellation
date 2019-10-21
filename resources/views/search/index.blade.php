@foreach($data as $item)
    <div>
            <div>{{{ $item->student_no }}}</div>
            <div>{{{ $item->katsudojotai_cd }}}</div>
            <div>{{{ $item->gakuseibiko }}}</div>
            <div>{{{ $item->last_update }}}</div>
            
    </div>
    <hr>
@endforeach