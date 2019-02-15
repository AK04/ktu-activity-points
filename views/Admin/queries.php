<div class="jumbotron">

	<a href="<?php echo ROOTPATH; ?>?controller=admin" class="btn btn-outline-info" style="float: left; display: inline-block;">Back</a>
	<h1 style="text-align: center;">Reports</h1>

	<br>
    <br>

    <h2>Check for students according to points</h2>

    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

		<div class="form-group">

            <label class="col-form-label">Having Points upto: </label>
            <input type="text" name="limit" class="form-control">
        </div>


        <input class="btn btn-primary" type="submit" name="submit" value="Check">

	</form>

	<br>

    <h2> Check for students yearwise </h2>

    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

        <div class="form-group">

            <label class="col-form-label">Year of completion:</label>
            
            <select class="form-control" name="year">
                <option value="1">First Year</option>
                <option value="2">Second Year</option>
                <option value="3">Third Year</option>
                <option value="4">Fourth Year</option>
            </select>

        </div>


        <input class="btn btn-primary" type="submit" name="submit" value="Find">

    </form>

    <br>

	<h2>Check for students according to activity</h2>

	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

		<div class="form-group">

            <label class="col-form-label">Select Activity</label>

            <select class="form-control" name="activity">
                <option value="N C C">N C C</option>
                <option value="N S S">N S S</option>
                <option value="Sports">Sports</option>
                <option value="Games">Games</option>
                <option value="Music">Music</option>
                <option value="Performing arts">Performing arts</option>
                <option value="Literary arts">Literary arts</option>
                <option value="Tech Fest, Tech Quiz">Tech Fest, Tech Quiz</option>
                <option value="Massive Open Online Courses with final assessment certificate">Massive Open Online Courses with final assessment certificate</option>
                <option value="Competitions conducted by Professional Societies - (IEEE, IET, ASME, SAE, NASA etc.)">Competitions conducted by Professional Societies - (IEEE, IET, ASME, SAE, NASA etc.)</option>
                <option value="Attending Full time Conference/Seminars/Exhibitions/Workshop/ STTP conducted at IITs /NITs">Attending Full time Conference/Seminars/Exhibitions/Workshop/ STTP conducted at IITs /NITs</option>
                <option value="Attending Full time Conference/Seminars/Exhibitions/Workshop/ STTP conducted at KTU or its affiliated institutes">Attending Full time Conference/Seminars/Exhibitions/Workshop/ STTP conducted at KTU or its affiliated institutes</option>
                <option value="Paper presentation/publication at IITs/NITs">Paper presentation/publication at IITs/NITs</option>
                <option value="Paper presentation/publication at KTU or its affiliated institutes">Paper presentation/publication at KTU or its affiliated institutes</option>
                <option value="Poster Presentation at IITs /NITs">Poster Presentation at IITs /NITs</option>
                <option value="Poster Presentation at KTU or its affiliated institutes">Poster Presentation at KTU or its affiliated institutes</option>
                <option value="Industrial Training/Internship (atleast for 5 full days)">Industrial Training/Internship (atleast for 5 full days)</option>
                <option value="Industrial/Exhibition visits">Industrial/Exhibition visits</option>
                <option value="Foreign Language Skill (TOEFL/IELTS/ BEC examsetc.)">Foreign Language Skill (TOEFL/IELTS/ BEC examsetc.)</option>
                <option value="Start-up Company –Registered legally">Start-up Company –Registered legally</option>
                <option value="Patent - Filed">Patent - Filed</option>
                <option value="Patent - Published">Patent - Published</option>
                <option value="Patent- Approved">Patent- Approved</option>
                <option value="Patent- Licensed">Patent- Licensed</option>
                <option value="Prototype developed and tested">Prototype developed and tested</option>
                <option value="Awards for Products developed">Awards for Products developed</option>
                <option value="Innovative technologies developed and used by industries/users">Innovative technologies developed and used by industries/users</option>
                <option value="Got venture capital funding for innovative ideas/products">Got venture capital funding for innovative ideas/products</option>
                <option value="Startup Employment(Offering jobs to two persons not less than Rs. 15000/- per month)">Startup Employment(Offering jobs to two persons not less than Rs. 15000/- per month)</option>
                <option value="Societal innovations">Societal innovations</option>
                <option value="Student Professional Societies (IEEE, IET, ASME, SAE, NASA etc.)">Student Professional Societies (IEEE, IET, ASME, SAE, NASA etc.)</option>
                <option value="College Association Chapters(Mechanical, Civil, Electrical etc.)">College Association Chapters(Mechanical, Civil, Electrical etc.)</option>
                <option value="Festival & Technical Events(College approved)">Festival & Technical Events(College approved)</option>
                <option value="Hobby Clubs">Hobby Clubs</option>
                <option value="Elected student representatives">Elected student representatives</option>

            </select>

        </div>

        <input class="btn btn-primary" type="submit" name="submit" value="Search">

	</form>

</div>
