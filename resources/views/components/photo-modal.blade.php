@props(['photo','index'])


                    <!-- Modal -->
                    <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          <div id="indicators" class="carousel slide" data-interval="false">
                                <ol class="carousel-indicators">

                                    <li data-target="#indicators" data-slide-to="1" class="active"></li>


                                </ol>
                                <div class="carousel-inner">

                                    <div class="carousel-item active">

                                    <img class="d-block w-100" src="{{ asset('storage/'.$photo->thumbnail) }}" alt="First slide">
                                    </div>

                                </div>

                                <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                      </div>
                    </div>