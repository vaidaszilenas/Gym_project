@extends('layouts.app',[
  'class' => 'footer_normal'
])

@section('content')



  <section>
    <div class="background_container">
      <div class="row">
            <div class="col-md-6 col- workout workout_color">
              <h2 class="zumba">Zumba</h2>
              <p>asdasd</p>
            </div>
            <div class="col-md-6 col- workout">
              <img class="float-right workout_img" id="img_important" src="images/zumba.jpeg" alt="">
            </div>
            <div class="col-md-12 col- workout_color">
              <p>There are several different kinds of Zumba classes, from Aqua Zumba workouts to classes like Zumba Toning that incorporate weights for additional calorie burning and strength training. There are even Zumba classes for kids.
              Working up a sweat in the 60-minute classes burns an average of 369 calories -- more than cardio kickboxing or step aerobics. You’ll get a great cardio workout that melts fat, strengthens your core, and improves flexibility.There are several different kinds of Zumba classes, from Aqua Zumba workouts to classes like Zumba Toning that incorporate weights for additional calorie burning and strength training. There are even Zumba classes for kids.
              Working up a sweat in the 60-minute classes burns an average of 369 calories -- more than cardio kickboxing or step aerobics. You’ll get a great cardio workout that melts fat, strengthens your core, and improves flexibility.</p>
              <p><a href="https://www.instagram.com/zumba/">@Zumba</a></p>
            </div>
        </div>
    </div>
  </section>
  <section>
    <div class="background_container">
      <div class="row">
        <div class="col-md-12 col- col-sm">
          <table class="table table-dark table-bordered">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                      Do you want to participate in this workout?
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <span>Free space: 20</span><br>
                    <span>Reserved:</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 12%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">12</div>
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form class="" action="index.html" method="post">
                      <button type="button" class="btn btn-primary">Registration</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <thead>
              <tr>
                <th scope="col">Time/Day</th>
                <th scope="col">I</th>
                <th scope="col">II</th>
                <th scope="col">III</th>
                <th scope="col">IV</th>
                <th scope="col">V</th>
                <th scope="col">VI</th>
                <th scope="col">VII</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">7:30-8:30</th>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Zumba</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">HIIT</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">K-1</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Yoga</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">K-1</a> </td>
              </tr>
              <tr>
                <th scope="row">10:00-11:00</th>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">HIIT</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">K-1</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Yoga</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">K-1</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
              </tr>
              <tr>
                <th scope="row">11:00-12:00</th>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">K-1</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
              </tr>
              <tr>
                <th scope="row">13:00-14:00</th>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Yoga</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
              </tr>
              <tr>
                <th scope="row">15:00-16:00</th>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">HIIT</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
              </tr>
              <tr>
                <th scope="row">17:00-18:00</th>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">K-1</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
              </tr>
              <tr>
                <th scope="row">19:00-20:00</th>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Cros</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
              </tr>
              <tr>
                <th scope="row">21:00-22:00</th>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Zumba</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Crossfits</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
                <td  class="hover"><a href="#" data-toggle="modal" data-target="#exampleModal">Mark</a> </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

</main>
<footer>
<section class="footer_normal">
  <div class="container">
    <div class="row">
      <div class="col-md col- col-sm  text-center">
        <div class="contacts">
          <i class="far fa-address-card"></i><span> Pranciškonų g. 10, Kaunas</span>
        </div>
        <div class="contacts">
          <i class="fas fa-phone-volume"></i><span> +370 600 44 555</span><br>
        </div>
        <div class="contacts">
          <i class="far fa-envelope"></i><span> lyrika_gym@gmail.com</span>
        </div>
        <div class="footer_icons">
          <div class="icons">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
          </div>
          <div class="icons">
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
          <div class="icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
          <div class="icons">
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
























@endsection
