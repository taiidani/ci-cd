<?php

if(getenv("FAIL_TESTS")) {
    print "Failing.";
    exit(1);
} else {
    print "Passing.";
    exit(0)
}
