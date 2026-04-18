-- UP
-- Remove legacy feedback modal from main template (replaced by quickOrderCardFormTpl)
UPDATE `Modx-BYStoresite_templates`
SET content = REGEXP_REPLACE(content, '\n[[:space:]]*\\[\\[\\$feedbackModalFormTpl\\]\\]\n', '\n')
WHERE id = 1 AND content LIKE '%[[$feedbackModalFormTpl]]%';

-- DOWN
-- Add feedback modal back (append before footer)
UPDATE `Modx-BYStoresite_templates`
SET content = REPLACE(content, '        [[$quickOrderCardFormTpl]]', '        [[$quickOrderCardFormTpl]]\n        [[$feedbackModalFormTpl]]')
WHERE id = 1 AND content LIKE '%[[$quickOrderCardFormTpl]]%' AND content NOT LIKE '%[[$feedbackModalFormTpl]]%';
