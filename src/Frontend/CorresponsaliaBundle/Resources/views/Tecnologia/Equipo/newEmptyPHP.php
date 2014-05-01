{% extends '::base.html.twig' %}

{% block titulomodulo %}  
    <h1>NUEVO EQUIPO</h1>
{% endblock %}
    
{% block body -%}
    {{ parent() }}

    {% if form_errors(form.serialEquipo)%}
    <div class="alert alert-danger errores" style="width:70%;">
        <div><b>Alerta! Ha ocurrido un error en el formulario:</b><br><br></div>
        <div>{{ form_errors(form.serialEquipo) }}</div>
    </div>
    {% endif %}

    <form novalidate method="post" action="{{ path('tecnoequipo_create') }}">
        {{ form_widget(form._token) }}
        <div class="formShow" style="width:70%;">
            <div class="contenedorform">
                <div class="labelform">Categoria:</div>
                <div class="widgetform">{{ form_widget(form.categoria) }}</div>
            </div>
            <div class="contenedorform">
                <div class="labelform">serial Equipo:</div>
                <div class="widgetform">{{ form_widget(form.serialEquipo) }}</div>
            </div>
            <div class="contenedorform">
                <div class="labelform">descripcion:</div>
                <div class="widgetform">{{ form_widget(form.descripcion) }}</div>
            </div>
            <div class="contenedorform">
                <div class="labelform">status:</div>
                <div class="widgetform">{{ form_widget(form.status) }}</div>
            </div>
            <div class="contenedorform">
                <div class="labelform">observacion Condicion:</div>
                <div class="widgetform">{{ form_widget(form.observacionCondicion) }}</div>
            </div>
            <div class="contenedorform">
                <div class="labelform">fecha Adquisicion:</div>
                <div class="widgetform">{{ form_widget(form.fechaAdquisicion) }}</div>
            </div>
        </div>
        
        <input type="submit" value="GUARDAR" class="btn btn-primary"> | 
        <a class="btn btn-default" href="{{ path('tecnoequipo') }}">IR AL LISTADO</a>
    </form>


{% endblock %}
