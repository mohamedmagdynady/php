<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@extends('master')
@section('content')

<br>
<br>
<br>
@foreach($empleado as $emp)

@if($emp->id==$post->id)
<h1>{{$emp->body}}</h1>

<div class="container-fluid" >Vivimos en un mundo en donde las aplicaciones móviles se han convertido en el centro de atención y la solución a muchas problemáticas presentadas en la humanidad. Solo bastará con identificar una necesidad, para que esta sea solucionada de inmediato por medio de desarrolladores amantes a la tecnología. Hoy en día es más fácil comunicarnos, realizar compras, hacer transacciones en bancos y realizar cualquier otra actividad, gracias al desarrollo de aplicaciones.

Por esta y muchas más razones, aprender a programar, más que una tendencia, se ha convertido en una gran posibilidad para crecer a nivel profesional y obtener mejores oportunidades a nivel laboral.

A continuación, te mostraremos algunos beneficios de aprender a desarrollar aplicaciones.

Más oportunidades de trabajo: A diario surgen nuevas necesidades que solo podrían ser resueltas por medio de una aplicación. Desde grandes empresas hasta nuevos emprendedores están pensando en la posibilidad de mejorar sus procesos por medio de una de ellas, y ahí estarás tú, listo para el asecho. Hoy en día los programadores son muy solicitados, así que probablemente no quedarás sin empleo.

Oportunidades de trabajar en grandes proyectos: Trabajar como desarrollador te dará la posibilidad de trabajar para grandes proyectos. Las grandes empresas están siempre en búsqueda de desarrolladores que logren llevar a la realidad las ideas que junto a su equipo han logrado consolidar, y que posiblemente logren tener gran impacto en la sociedad.

Nueva forma de emprender: Si eres desarrollador y aún no haces parte de una organización, esto te permitirá administrar tu tiempo e involucrarte en diferentes proyectos. Al hacerlo, estarás dando cabida a la posibilidad de emprender y crear tu propia marca; de esta forma podrás brindar tus servicios a nombre de ella y que esta empiece a ser reconocida.

Mayores ingresos: Al existir una gran masa de trabajo en el mercado, el valor de las horas trabajadas por los desarrolladores aumentará, lo cual permite que ser programador sea cada día más rentable.

Nuevos conocimientos: El desarrollado vive en un mundo de nuevas tecnologías, por lo tanto, un desarrollador de aplicaciones está en constante aprendizaje de lenguajes de programación, tecnologías, actualizaciones y demás información que los mantendrá actualizados y los permitirá adquirir más conocimientos.

Posibilidad de trabajar desde casa: Si has decidido ser desarrollador y no hacer parte de una empresa, tendrás la posibilidad de emplear tus labores desde la comodidad de tu casa, pues los esfuerzos dedicados a esta tarea no requieren de la supervisión continua del dueño del proyecto.

Ahora que ya conoces los beneficios de ser desarrollador de aplicaciones, llegó el momento de convertirte en un experto en el tema y devorarte el mundo gracias a tus conocimientos. Estudia con Next U y certifícate en programación Android y en programación IOS y aprender a crear aplicaciones desde cero.   
</div>
<h3>{{$emp->body}}</h3>
<hr>
 
@endif
@endforeach
<form>
  
  <div class="form-group">
    <label for="comment">share you opinion</label>
    <textarea class="form-control" id="comment"placeholder="add a comment ....." rows="3"></textarea>
  </div>
</form>

<a type="button" href="..\posts" class="btn btn-primary btn-lg">back to posts page</a>
@stop