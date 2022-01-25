<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="table">
      <table class="table table-bordered">
        <thead>
          <th>No</th>
          <th>NIM</th>
          <th>Mata Kuliah</th>
          <th>Level</th>
          <th>Leaderboard</th>
          <th>Poin</th>
          <th>Nilai 1</th>
          <th>Nilai 2</th>
          <th>Nilai 3</th>
          <th>Nilai 4</th>
          <th>Nilai 5</th>
          <th>Nilai 6</th>
          <th>Nilai 7</th>
          <th>Nilai 8</th>
          <th>Nilai 9</th>
          <th>Nilai 10</th>
          <th>Nilai 11</th>

        </thead>
        <tbody>
          @foreach($members as $member)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$member['nim_nip_user']}}</td>
              <td>{{$member['nama_kelas']}}</td>
              <td>{{$member['level']}}</td>
              <td>{{$member['leaderboard']}}</td>
              <td>{{$member['poin']}}</td>
              <td>{{$member['nilai1']}}</td>
              <td>{{$member['nilai2']}}</td>
              <td>{{$member['nilai3']}}</td>
              <td>{{$member['nilai4']}}</td>
              <td>{{$member['nilai5']}}</td>
              <td>{{$member['nilai6']}}</td>
              <td>{{$member['nilai7']}}</td>
              <td>{{$member['nilai8']}}</td>
              <td>{{$member['nilai9']}}</td>
              <td>{{$member['nilai10']}}</td>
              <td>{{$member['nilai11']}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
