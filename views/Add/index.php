<div class="jumbotron">

    <div class="container-fluid">

        <h1 class="heading">Claim Activity Points</h1>
        
        </br>

        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >

            <div class="form-group">

                <label class="col-form-label">Activity:</label>

                <select class="form-control" name="activity">
                    <option value="1">N C C</option>
                    <option value="2">N S S</option>
                    <option value="3">Sports</option>
                    <option value="4">Games</option>
                    <option value="5">Music</option>
                    <option value="6">Performing arts</option>
                    <option value="7">Literary arts</option>
                    <option value="8">Tech Fest, Tech Quiz</option>
                    <option value="9">Massive Open Online Courses with final assessment certificate</option>
                    <option value="10">Competitions conducted by Professional Societies - (IEEE, IET, ASME, SAE, NASA etc.)</option>
                    <option value="11">Attending Full time Conference/Seminars/Exhibitions/Workshop/ STTP conducted at IITs /NITs</option>
                    <option value="11a">Attending Full time Conference/Seminars/Exhibitions/Workshop/ STTP conducted at KTU or its affiliated institutes</option>
                    <option value="12">Paper presentation/publication at IITs/NITs</option>
                    <option value="12a">Paper presentation/publication at KTU or its affiliated institutes</option>
                    <option value="13">Poster Presentation at IITs /NITs</option>
                    <option value="13a">Poster Presentation at KTU or its affiliated institutes</option>
                    <option value="14">Industrial Training/Internship (atleast for 5 full days)</option>
                    <option value="15">Industrial/Exhibition visits</option>
                    <option value="16">Foreign Language Skill (TOEFL/IELTS/ BEC examsetc.)</option>
                    <option value="17">Start-up Company –Registered legally</option>
                    <option value="18">Patent - Filed</option>
                    <option value="19">Patent - Published</option>
                    <option value="20">Patent- Approved</option>
                    <option value="22">Patent- Licensed</option>
                    <option value="22">Prototype developed and tested</option>
                    <option value="23">Awards for Products developed</option>
                    <option value="24">Innovative technologies developed and used by industries/users</option>
                    <option value="25">Got venture capital funding for innovative ideas/products</option>
                    <option value="26">Startup Employment(Offering jobs to two persons not less than Rs. 15000/- per month)</option>
                    <option value="27">Societal innovations</option>
                    <option value="28">Student Professional Societies (IEEE, IET, ASME, SAE, NASA etc.)</option>
                    <option value="29">College Association Chapters(Mechanical, Civil, Electrical etc.)</option>
                    <option value="30">Festival & Technical Events(College approved)</option>
                    <option value="31">Hobby Clubs</option>
                    <option value="32">Elected student representatives</option>

                </select>

            </div>

            <div class="form-group">

                <label class="col-form-label" >Activity Level:</label>

                <select class="form-control" name="level">
                    <option value="0">Not Applicable</option>
                    <option value="1">I (College Events)</option>
                    <option value="2">II (Zonal Events)</option>
                    <option value="3">III (State/ University Events)</option>
                    <option value="4">IV (National Events)</option>
                    <option value="5">V (International Events)</option>
                </select>

            </div>

            <div class="form-group">

                <label class="col-form-label" >Prize(if any):</label>

                <select class="form-control" name="prize">
                    <option value="0">Not Applicable</option>
                    <option value="0">Participant</option>
                    <option value="1">First</option>
                    <option value="2">Second</option>
                    <option value="3">Third</option>
                </select>

            </div>

            <div class="form-group">

                <label class="col-form-label" >Involvement Level(Only for leadership & management Activities):</label>

                <select class="form-control" name="involvement">
                    <option value="0">Not Applicable</option>
                    <option value="1">Core coordinator</option>
                    <option value="2">Sub coordinator</option>
                    <option value="3">Volunteer</option>
                </select>

            </div>

            <div class="form-group">

                <label class="col-form-label" >Document: </label> 
                <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">              

            </div>

            <div class="form-group">

                <label class="col-form-label">Year of completion:</label>
                <select class="form-control" name="year">
                    <option value="1">First Year</option>
                    <option value="2">Second Year</option>
                    <option value="3">Third Year</option>
                    <option value="4">Fourth Year</option>
                </select>

            </div>

            <div class="form-group">

                <label class="col-form-label">Notes:</label>
                <input type="text" name="notes" class="form-control">

            </div>
                
            </br>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit"> 
            <a class="btn btn-danger" href="<?php echo ROOTPATH; ?>?controller=home" >Cancel</a>             

        </form>

    </div>

</div>
