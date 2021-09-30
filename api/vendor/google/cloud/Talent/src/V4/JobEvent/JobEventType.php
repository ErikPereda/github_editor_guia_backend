<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/event.proto

namespace Google\Cloud\Talent\V4\JobEvent;

use UnexpectedValueException;

/**
 * An enumeration of an event attributed to the behavior of the end user,
 * such as a job seeker.
 *
 * Protobuf type <code>google.cloud.talent.v4.JobEvent.JobEventType</code>
 */
class JobEventType
{
    /**
     * The event is unspecified by other provided values.
     *
     * Generated from protobuf enum <code>JOB_EVENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const JOB_EVENT_TYPE_UNSPECIFIED = 0;
    /**
     * The job seeker or other entity interacting with the service has
     * had a job rendered in their view, such as in a list of search results in
     * a compressed or clipped format. This event is typically associated with
     * the viewing of a jobs list on a single page by a job seeker.
     *
     * Generated from protobuf enum <code>IMPRESSION = 1;</code>
     */
    const IMPRESSION = 1;
    /**
     * The job seeker, or other entity interacting with the service, has
     * viewed the details of a job, including the full description. This
     * event doesn't apply to the viewing a snippet of a job appearing as a
     * part of the job search results. Viewing a snippet is associated with an
     * [impression][google.cloud.talent.v4.JobEvent.JobEventType.IMPRESSION]).
     *
     * Generated from protobuf enum <code>VIEW = 2;</code>
     */
    const VIEW = 2;
    /**
     * The job seeker or other entity interacting with the service
     * performed an action to view a job and was redirected to a different
     * website for job.
     *
     * Generated from protobuf enum <code>VIEW_REDIRECT = 3;</code>
     */
    const VIEW_REDIRECT = 3;
    /**
     * The job seeker or other entity interacting with the service
     * began the process or demonstrated the intention of applying for a job.
     *
     * Generated from protobuf enum <code>APPLICATION_START = 4;</code>
     */
    const APPLICATION_START = 4;
    /**
     * The job seeker or other entity interacting with the service
     * submitted an application for a job.
     *
     * Generated from protobuf enum <code>APPLICATION_FINISH = 5;</code>
     */
    const APPLICATION_FINISH = 5;
    /**
     * The job seeker or other entity interacting with the service
     * submitted an application for a job with a single click without
     * entering information. If a job seeker performs this action, send only
     * this event to the service. Do not also send
     * [JobEventType.APPLICATION_START][google.cloud.talent.v4.JobEvent.JobEventType.APPLICATION_START] or [JobEventType.APPLICATION_FINISH][google.cloud.talent.v4.JobEvent.JobEventType.APPLICATION_FINISH]
     * events.
     *
     * Generated from protobuf enum <code>APPLICATION_QUICK_SUBMISSION = 6;</code>
     */
    const APPLICATION_QUICK_SUBMISSION = 6;
    /**
     * The job seeker or other entity interacting with the service
     * performed an action to apply to a job and was redirected to a different
     * website to complete the application.
     *
     * Generated from protobuf enum <code>APPLICATION_REDIRECT = 7;</code>
     */
    const APPLICATION_REDIRECT = 7;
    /**
     * The job seeker or other entity interacting with the service began the
     * process or demonstrated the intention of applying for a job from the
     * search results page without viewing the details of the job posting.
     * If sending this event, JobEventType.VIEW event shouldn't be sent.
     *
     * Generated from protobuf enum <code>APPLICATION_START_FROM_SEARCH = 8;</code>
     */
    const APPLICATION_START_FROM_SEARCH = 8;
    /**
     * The job seeker, or other entity interacting with the service, performs an
     * action with a single click from the search results page to apply to a job
     * (without viewing the details of the job posting), and is redirected
     * to a different website to complete the application. If a candidate
     * performs this action, send only this event to the service. Do not also
     * send [JobEventType.APPLICATION_START][google.cloud.talent.v4.JobEvent.JobEventType.APPLICATION_START],
     * [JobEventType.APPLICATION_FINISH][google.cloud.talent.v4.JobEvent.JobEventType.APPLICATION_FINISH] or [JobEventType.VIEW][google.cloud.talent.v4.JobEvent.JobEventType.VIEW] events.
     *
     * Generated from protobuf enum <code>APPLICATION_REDIRECT_FROM_SEARCH = 9;</code>
     */
    const APPLICATION_REDIRECT_FROM_SEARCH = 9;
    /**
     * This event should be used when a company submits an application
     * on behalf of a job seeker. This event is intended for use by staffing
     * agencies attempting to place candidates.
     *
     * Generated from protobuf enum <code>APPLICATION_COMPANY_SUBMIT = 10;</code>
     */
    const APPLICATION_COMPANY_SUBMIT = 10;
    /**
     * The job seeker or other entity interacting with the service demonstrated
     * an interest in a job by bookmarking or saving it.
     *
     * Generated from protobuf enum <code>BOOKMARK = 11;</code>
     */
    const BOOKMARK = 11;
    /**
     * The job seeker or other entity interacting with the service was
     * sent a notification, such as an email alert or device notification,
     * containing one or more jobs listings generated by the service.
     *
     * Generated from protobuf enum <code>NOTIFICATION = 12;</code>
     */
    const NOTIFICATION = 12;
    /**
     * The job seeker or other entity interacting with the service was
     * employed by the hiring entity (employer). Send this event
     * only if the job seeker was hired through an application that was
     * initiated by a search conducted through the Cloud Talent Solution
     * service.
     *
     * Generated from protobuf enum <code>HIRED = 13;</code>
     */
    const HIRED = 13;
    /**
     * A recruiter or staffing agency submitted an application on behalf of the
     * candidate after interacting with the service to identify a suitable job
     * posting.
     *
     * Generated from protobuf enum <code>SENT_CV = 14;</code>
     */
    const SENT_CV = 14;
    /**
     * The entity interacting with the service (for example, the job seeker),
     * was granted an initial interview by the hiring entity (employer). This
     * event should only be sent if the job seeker was granted an interview as
     * part of an application that was initiated by a search conducted through /
     * recommendation provided by the Cloud Talent Solution service.
     *
     * Generated from protobuf enum <code>INTERVIEW_GRANTED = 15;</code>
     */
    const INTERVIEW_GRANTED = 15;

    private static $valueToName = [
        self::JOB_EVENT_TYPE_UNSPECIFIED => 'JOB_EVENT_TYPE_UNSPECIFIED',
        self::IMPRESSION => 'IMPRESSION',
        self::VIEW => 'VIEW',
        self::VIEW_REDIRECT => 'VIEW_REDIRECT',
        self::APPLICATION_START => 'APPLICATION_START',
        self::APPLICATION_FINISH => 'APPLICATION_FINISH',
        self::APPLICATION_QUICK_SUBMISSION => 'APPLICATION_QUICK_SUBMISSION',
        self::APPLICATION_REDIRECT => 'APPLICATION_REDIRECT',
        self::APPLICATION_START_FROM_SEARCH => 'APPLICATION_START_FROM_SEARCH',
        self::APPLICATION_REDIRECT_FROM_SEARCH => 'APPLICATION_REDIRECT_FROM_SEARCH',
        self::APPLICATION_COMPANY_SUBMIT => 'APPLICATION_COMPANY_SUBMIT',
        self::BOOKMARK => 'BOOKMARK',
        self::NOTIFICATION => 'NOTIFICATION',
        self::HIRED => 'HIRED',
        self::SENT_CV => 'SENT_CV',
        self::INTERVIEW_GRANTED => 'INTERVIEW_GRANTED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(JobEventType::class, \Google\Cloud\Talent\V4\JobEvent_JobEventType::class);

