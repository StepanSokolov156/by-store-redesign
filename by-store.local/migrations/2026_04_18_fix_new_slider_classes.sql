-- UP
UPDATE `Modx-BYStoresite_htmlsnippets`
SET snippet = '[[!sectionProducts?\n    &section=`2`\n    &title=`Новинки`\n    &filterId=`newArrivalsFilter`\n    &swiperClass=`newArrivalsSwiper`\n    &prevId=`newArrivalsSliderPrev`\n    &nextId=`newArrivalsSliderNext`\n]]'
WHERE name = 'products.new';

-- DOWN
UPDATE `Modx-BYStoresite_htmlsnippets`
SET snippet = '[[!sectionProducts?\n    &section=`2`\n    &title=`Новинки`\n    &filterId=`newFilter`\n    &swiperClass=`newSwiper`\n    &prevId=`newSliderPrev`\n    &nextId=`newSliderNext`\n]]'
WHERE name = 'products.new';
