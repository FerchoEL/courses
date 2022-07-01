@props(['course'])
<article class="card">
    <img class="h-36 w-full object-cover" src="{{$course->image->url}}" alt="">
    <div class="card-body">
        <h1 class="card-title">{{Str::limit($course->title,40)}}</h1>
        <p class="text-gray-500 text-sm mb-2">Prof: {{$course->teacher->name}}</p>
        <p>{{$course->rating}}</p>

        <div class="flex">
            <ul class="flex">
                <li class="mr-1"><i class="text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400 fas fa-star"></i></li>
                <li class="mr-1"><i class="text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400 fas fa-star"></i></li>
                <li class="mr-1"><i class="text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400 fas fa-star"></i></li>
                <li class="mr-1"><i class="text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400 fas fa-star"></i></li>
                <li class="mr-1"><i class="text-{{$course->rating == 5 ? 'yellow' : 'gray'}}-400 fas fa-star"></i></li>
                               
            </ul>
            <p class="text-sm text-gray-500 ml-auto">
                <i class="fas fa-users"></i>
                ({{$course->students_count}})
            </p>
            
        </div>
        
        <a href="{{route('courses.show',$course)}}" type="submit" class="btn btn-primary btn-block mt-2 ">
            Más informacion
        </a>

    </div>
</article> 