   <!DOCTYPE html>
   <html>
   <head>
     <title>Books Record</title>
   </head>
   <body>
   
   <div id="content-wrapper">
  
          <DIV class="row">
            <div class="col-md-12" align="center"><h4>Books List</h4></div>
          </DIV>
         <table class="table table-striped task-table">          
          <thead>
            <th>ID</th>
            <th>Book Title</th>
            <th>book description</th>
            <th>book author</th>
          </thead>
           <tbody class="panel-body">
          @foreach($getbooks as $value)
           <tr>
             <td>{{ $value->id }}</td>
             <td>{{ $value->book_title }}</td>
             <td>{{ $value->book_description }}</td>
             <td>{{ $value->book_author }}</td>
           </tr>
          @endforeach
       
          </tbody> 
          </table>
           
        </div>

   </body>
   </html>
     