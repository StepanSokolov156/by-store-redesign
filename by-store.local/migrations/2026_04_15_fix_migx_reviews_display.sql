-- UP: Fix reviews MIGX TV — set input_properties via PHP script
-- Applied: 2026-04-15
-- NOTE: This migration cannot be applied via raw SQL due to PHP serialization
--       escaping issues. Run _fix_migx_reviews.php instead:
--       php _fix_migx_reviews.php
-- The script uses PDO to properly serialize and store the input_properties.

-- No SQL here — see _fix_migx_reviews.php

-- DOWN
-- Re-run the original reviews migration SQL to reset
